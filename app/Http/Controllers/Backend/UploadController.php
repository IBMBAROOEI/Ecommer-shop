<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Picture;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
//use Intervention\Image\Image;
use App\Repositories\ProductRepositories\ProductRepositoriesInterface;
use Intervention\Image\ImageManagerStatic as Image;

class UploadController extends Controller
{

    protected $Product;
    use UploadTratit;

    public function __construct(ProductRepositoriesInterface $Product)
    {
        $this->Product = $Product;
    }

    public function index(){
        $picture=Picture::with('product')->get();
        return viwe('front.index',compact('picture'));
    }

    public function store(Request $request)
    {
        $request->validate([

            'image' => 'required',
        ]);

        $product = Product::findOrFail($request->product_id);
        {

            if ($request->hasFile('image')) {
                foreach ( $request->file('image') as $file) {
                    $filePath =  $product->image = $this->UserImageUpload($file,340,374,public_path() .'/uploads/');
                    Picture::create([
                        'image' =>  $filePath,
                        'product_id' => $product->id
                    ]);
                }
                return redirect()->back();

            }
        }
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'image' => 'required'
        ]);
        $data = $validator->validated();
        $picture=Picture::find($id);
        $data = $request->all();
       $this->deleteOldImage($id);
        $data['image']= $this->UserImageUpload($request->file('image'), 640, 20, public_path() . '/uploads/');
        $picture->update( $data);
        return redirect()->back()->with('success', ' بروز شد');
    }
    public function edit($id)
    {
        $Picture=Picture::find($id);
        return view('backend.picture.edit', compact('Picture'));
    }

    public function destroy($id)
    {
        $news = Picture::findOrFail($id);
      File::delete(public_path() . '/uploads/'. $news->image);
      $news->delete();
        return redirect()->back()->with('success', ' پاک شد');
    }


    protected function deleteOldImage($id)
    {
        $del=Picture::find($id);
        $old=$del->image;
        File::delete(public_path() . '/uploads/'.$old);

    }
}