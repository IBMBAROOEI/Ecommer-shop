<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function index()
    {

        $brands = Brand::simplePaginate(2);
        return view('backend.brands.table', compact('brands'));
    }


    public function create()
    {
        return view('backend.brands.brand');
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand_name' => 'required|unique:brands|string',
        ]);
        DB::table('brands')->insert([
            'brand_name' => $request->brand_name,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        return redirect()->back()->with('success', 'برند ایجاد شد');
    }

    public function edit($id)
    {
        $brands = DB::table('brands')->where('id', $id)->first();
        return view('backend.brands.edit', compact('brands'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'brand_name' => 'required|unique:brands|string',
        ]);
        DB::table('brands')->where('id', $id)->update([
            'brand_name' => $request->brand_name,
        ]);
        return redirect()->route('brand.index')->with('success', 'برند بروز شد');
    }

    public function destroy($id)
    {
        DB::table('brands')->where('id', $id)->delete();
        return redirect()->route('brand.index')->with('success', 'برند پاک شد');
    }


    public function show($id)
    {
        $brand = Brand::find($id);

        if ($brand !== null) {
            $products = $brand->products()->paginate(2);
            return view('front.index', compact('products'));
        }
    }
}
