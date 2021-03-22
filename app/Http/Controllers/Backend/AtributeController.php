<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Attr__Product;
use App\Models\Product;
use App\Repositories\ProductRepositories\ProductRepositoriesInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class AtributeController extends Controller
{
    protected $Product;

    public function __construct(ProductRepositoriesInterface $Product)
    {
        $this->Product = $Product;
    }

    public function index()
    {
        $attr = Attr__Product::with('Product')->get();
        return view('backend.atribute_product.table', compact('attr'));
    }

    public function show($id)
    {
        $products = $this->Product->show($id);
        return view('backend.product.atribute_product', compact('products'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
          'size'=>'required|alpha_dash',
            'price' => 'required|integer|numeric|between:0,99.99' ,
            'stock' => 'required|integer',
           'sku'=>'required',
            'color'=>'required|alpha'
        ]);
        Attr__Product::create($request->all());
return redirect()->back()->with('success', 'ثبت شد');
    }

    public function edit($id)
    {

        $attr=Attr__Product::find($id);
        return view('backend.atribute_product.edit',compact('attr') );

    }

    public function update(Request $request, $id)
    {

         Validator::make($request->all(),[
            'size'=>'required|alpha_dash',
            'price' => 'required|integer|numeric|between:0,99.99' ,
            'stock' => 'required|integer',
            'sku'=>'required',
            'color'=>'required|alpha'
        ]);
        $attr=Attr__Product::find($id);
        $attr->update($request->all());
        return redirect()->back()->with('success', ' بروز شد');
    }

    public function destroy($id)
    {
        Attr__Product::find($id)->delete();
        return redirect()->back()->with('success', ' پاک شد');
    }

}




















//$product = Product::findOrFail($request->product_id);
//
//$bookings = [];
//
//
//$product_id = Product::findOrFail($request->product_id);
//foreach ($request->size as $key => $value) {
//    array_push($bookings, [
//        'product_id' => $request->product_id,
//        'size' => $request->size[$key],
//    ]);
//}
//Attr_Size::insert($bookings);
