<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Attr__Product;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class CartController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth', ['only' => ['indexcart']]);
//    }

    public function indexcart()
    {
        return view('front.cart');

    }

    public function addcart(Request $request, $id)
    {

//        $request->validate([
//            'size' => 'required',
//            'quntity'=>'required'
//        ]);
        $product = Product::find($id);
        $all_attrs = $request->all();
        $attr = explode('-', $all_attrs['size']);
        $result_select = Attr__Product::where(['size' => $attr[1]])->first();
        if($result_select->stock< $request->quntity){
            return redirect()->back()->with('success','موجودی کافی نیست');
        } else {
            $cart = session()->get('cart');
            $index = $id . $result_select->price . $result_select->color . $result_select->size.$result_select->id;
            if (!$cart) {
                $cart[$index] =
                    [
                        "name_product" => $product->name_product,
                        "price" => $result_select->price,
                        "color" => $result_select->color,
                        "size" => $result_select->size,
                        "code_product" => $product->code_product,
                        "image" => $product->image,
                    "product_id" => $product->id,
                    "quntity" => $request->quntity,
                    "atribute_id" => $result_select->id,

                ];
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }
            if (isset($cart[$index])) {
                $cart[$index]['quntity']++;
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }
            $cart[$index] =
                [
                    "name_product" => $product->name_product,

                    "price" => $result_select->price,
                    "color" => $result_select->color,
                    "size" => $result_select->size,
                    "code_product" => $product->code_product,
                    "image" => $product->image,
                    "product_id" => $product->id,
                    "quntity" => $request->quntity,
                    "atribute_id" => $result_select->id,
                ];
            session()->put('cart', $cart);;
            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

    }

    public function g(){

    }

























    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
        }
    }



    public function getCartTotal()
    {
        $total = 0;
        $cart = session()->get()('cart');
        foreach ($cart as $id => $details) {
            $total += $details['price'] * $details['quntity'];
        }
        return number_format($total, 2);
    }

    public function attr_size(Request $request)
    {
        $all_attrs = $request->all();
        $attr = explode('-', $all_attrs['idSize']);
        $result_select = Attr__Product::where(['product_id' => $attr[0], 'size' => $attr[1]])->first();
        return $result_select->price;

    }
    public function attr_color(Request $request)
    {
        $all_attrs=$request->all();
        $attr=explode('-',$all_attrs['idSize']);
        $result_select=Attr__Product::where(['product_id'=>$attr[0],'size'=>$attr[1]])->first();
        return $result_select->color;

    }


}



