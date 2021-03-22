<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Picture;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Repositories\ProductRepositories\ProductRepositoriesInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{

    protected $Product;
    use UploadTratit;

    public function __construct(ProductRepositoriesInterface $Product)
    {
        $this->Product = $Product;
    }

    public function index(Request $request)
    {
        $products = $this->Product->all();

        return view('backend.product.table', compact('products'));
    }

    public function create()
    {
        return view('backend.product.product');
    }

    public function edit($id)
    {
        $products = $this->Product->edit($id);
        return view('backend.product.edit', compact('products'));
    }
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'name_product' => 'required',
            'code_product' => 'required',
            'discription_product' => 'required',
            'price' => 'required',
            'stuck' => 'required',
            'slug' => 'required',
            'brand_id' => 'required',
            'sub_ategories_id' => 'required',
            'categorie_id' => 'required',
            'image' => 'required'
        ]);

        $data = $validator->validated();
        $product = $this->Product->create($data);
        $product->image = $this->UserImageUpload($request->file('image'),100,100,public_path() .'/uploads/');
        $product->save();
        return redirect()->back()->with('success', 'ثبت شد');

    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name_product' => 'required',
            'code_product' => 'required',
            'discription_product' => 'required',
            'price' => 'required',
            'stuck' => 'required',
            'slug' => 'required',
            'brand_id' => 'required',
            'sub_ategories_id' => 'required',
            'categorie_id' => 'required',
            'image' => 'required'
        ]);
        $data = $validator->validated();
        $data = $request->all();
       $this->deleteOldImage($id);
        $data['image']= $this->UserImageUpload($request->file('image'), 640, 20, public_path() . '/uploads/');
        $this->Product->update($data,$id);
        return redirect()->back()->with('success', 'محصول بروز شد');
        }



    protected function deleteOldImage($id)
    {
        $del=$this->Product->deleteOldImage($id);
        $old=$del->image;
        File::delete(public_path() . '/uploads/'.$old);

        }

    public function show($id)
    {
        $products=$this->Product->show($id);
        return view('backend.product.show',compact('products'));
    }

    public function image($id)
    {
        $pic=$this->Product->image($id);
        return view('backend.picture.table',compact('pic'));

    }
    public function destroy($id)
    {
        $this->Product->delete($id);
        return redirect()->route('product')->with('success', 'محصول پاک  شد');
    }

















}
