<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public  function  search(Request $request){

            $products = Product::with('Brand')->search($request->get('search'))->paginate(2);
        return view('front.index2',compact('products'));


    }
}
