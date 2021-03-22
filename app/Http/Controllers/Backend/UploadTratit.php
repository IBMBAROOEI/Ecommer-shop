<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/9/2020
 * Time: 4:41 PM
 */

namespace App\Http\Controllers\Backend;


use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

trait UploadTratit
{
    public function UserImageUpload($file,$width,$height,$destination)
    {

        $file_name = str::random(20) . time() . '-' . $file->getClientOriginalName();
        $image = Image::make($file);
        $image->resize($width, $height)->save($destination . $file_name);
        return $file_name;
    }

}


//public function UserImageUpload($fieldname )
//{
//
//    $file_name = str::random(20) . time() . '-' . $fieldname->getClientOriginalName();
//    $destinationPath = '/uploads/';
//    $image = Image::make($fieldname);
//    $image->resize(350, 240)->save(public_path() . $destinationPath . $file_name);
//    return $file_name;
//}