<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Repositories\ProductRepositories\ProductRepositoriesInterface;


class WishListController extends Controller
{

    public function __construct(ProductRepositoriesInterface $Product)
    {
        $this->Product = $Product;

    }
    public function addwishlist(Request $request,$id)
    {

        if(DB::table('user_product')->where([['user_id', Auth::user()->id], ['product_id', $id]])->exists())
        {
            return redirect()->back()->with('success', 'قبلا ثبت شده');
        }
        else {
            $user = User::find( Auth::user()->id);
            $user->user_products()->attach($id);

            return redirect()->back()->with('success', "ذخیره شد");
        }

    }

    public  function  index(){
        $user =User::all();
        foreach($user  as $product) {
            $product->user_products;
            $pro = $product->user_products;
        }
        return view('backend.favorite.table', compact('pro'));
    }


    public function deletewishlist(Request $request ,$id)
    {
        $user=Auth::user();
        $user->user_products()->detach($id);
        return redirect()->back()->with('success', "پاک شد ");
    }


}
