<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Shetabit\Payment\Facade\Payment;
use App\Models\Transaction;
use Shetabit\Multipay\Invoice;
use Illuminate\Http\Request;
use ShetabitPaymentFacadePayment;
use ShetabitPaymentExceptionsInvalidPaymentException;




class PeymentController extends Controller
{
    public function index()
    {
        $o = Order::where('status','pending')->get();
        return view('front.peyment', compact('o'));
    }

    public function peyment(Request $request)
    {
        $order = Order::findOrfail($request->order_id);
        $amount = $order->order_total;
        $invoice = (new Invoice)->amount((int)$amount);

        return Payment::callbackUrl(url('payment/verify'))
            ->purchase($invoice, function ($driver, $transactionId) use ($order,$amount, $invoice) {
            $answer = new Transaction();
            $answer ->amount= $amount;
            $answer->order_id = $order->id;
            $answer->user_id = \Auth::id();
            $answer->transaction_id=$transactionId;
            $answer->save();
        })->pay()->render();
    }


    /**
     * @param Request $request
     * @return string
     */
    public  function verify(Request $request ){
        $transactionId = $request->Authority;
        try {
            $transaction = Transaction::where('transaction_id', '=', $transactionId)->first();
            $receipt = Payment::amount((int)$transaction->amount)->transactionId($transactionId)->verify();
            $payment = Transaction::where('transaction_id',$transactionId)->first();
            $payment->receipt_code = $receipt->getReferenceId();
            $payment->update([
                'status' => 1
            ]);
            $payment->order()->update([
                'status' => 'completed'
            ]);
            return "پرداخت شما موفق بود";
        } catch (InvalidPaymentException $exception) {
        echo $exception->getMessage();
        }
    }








}