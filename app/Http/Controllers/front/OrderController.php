<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Attr__Product;
use App\Models\Order;
use App\Models\Order_Dtail;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index(){

        $order=Order::where('status','pending')->get();
        return view('backend.order.table',compact('order'));
    }

    public function show($id){

        $order=Order::find($id);
        return view('backend.order.orderdetails',compact('order'));
    }
    public function store(Request $request)
    {


        $cart=session()->get('cart');
            $total = 0;
            foreach ($cart as $id => $details)
                $total += $details['price'] * $details['quntity'];

        $order = new Order();
        $order->users_id = \Auth::id();
        $order->status='pending';
        $order->order_total=$total;
        $order->save();
        foreach ($cart as $id => $details)
        {
            $order-> Order_Dtail()->create([

                'quntity' => $details['quntity'],
                'order_total' => $details['price'],
                'name_product' => $details['name_product'],
                'code_product' => $details['code_product'],
                'size'=>$details['size'],
                'color'=>$details['color'],
            ]);
        }
        session()->forget('cart', $cart);
        return redirect()->back()->with('success', 'ثبت شد');

    }



}
