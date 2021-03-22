<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Product;
use App\Models\Attr__Product;
use App\Repositories\ProductRepositories\ProductRepositoriesInterface;
use App\Repositories\Sliderrepository\SliderRepositorylnterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    protected $Product;

    public function __construct(ProductRepositoriesInterface $Product,SliderRepositorylnterface $slider)
    {
        $this->Product = $Product;
        $this->Slider = $slider;
    }

    public function index()
    {
        $products = $this->Product->all();
        $slider=$this->Slider->all();
        $productlast= $this->Product->latest();
        return view('front.index',compact('products','slider','productlast'));
    }

public  function show($id){
    $products=$this->Product->show($id);
    $pro= $this->Product->latest();
    return view('front.product-details',compact('products','pro'));
}




    public function show_price($id)
    {
        $attrpro=Attr__Product::findorfail($id);
        return view('front.product-details', compact('attrpro'));
    }
}