<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Repositories\Sliderrepository\SliderRepositorylnterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{

    protected $slider;
    use UploadTratit;

    public function __construct(SliderRepositorylnterface $slider)
    {
        $this->Slider = $slider;
    }

    public function  index(){

        $slider=Slider::all();
        return view('backend.slider.show',compact('slider'));
    }


    public function  create(){
        return view('backend.slider.table');
    }


    public function store(Request $request){
        $request->validate([

            'image' => 'required',
        ]);
            if ($request->hasFile('image')) {
                foreach ( $request->file('image') as $file) {
                    $filePath= $this->UserImageUpload($file,1374,374,public_path() .'/uploads/');
                    Slider::create([
                        'image' =>  $filePath,
                    ]);
                }
                return redirect()->back();

            }
        }
    public function edit($id)
    {

        $slider = $this->Slider->edit($id);
        return view('backend.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'image' => 'required'
        ]);
        $data = $validator->validated();
        $data = $request->all();
        dd($this->deleteOldImage($id));
        $data['image']= $this->UserImageUpload($request->file('image'), 1374, 374, public_path() . '/uploads/');
        $this->Slider->update($data,$id);
        return redirect()->back()->with('success', 'محصول بروز شد');
    }

    public function destroy($id)
    {
        $news = Slider::findOrFail($id);
        File::delete(public_path() . '/uploads/'. $news->image);
        $news->delete();
        return redirect()->back()->with('success', ' پاک شد');
    }

    protected function deleteOldImage($id)
    {
        $del = $this->Slider->deleteOldImage($id);
        $old = $del->image;
        dd($old);
        File::delete(public_path() . '/uploads/' . $old);
    }

}

