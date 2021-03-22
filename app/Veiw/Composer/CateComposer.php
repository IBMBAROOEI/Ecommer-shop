<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/7/2020
 * Time: 10:41 AM
 */

namespace App\Veiw\Composer;

use App\Models\Brand;
use App\Models\Categorie;
use Illuminate\View\View;
class CateComposer
{

    public function compose(View $view)
    {
        $categores = Categorie::all();
        return $view->with("categores",$categores);
    }

    public function composebrand(View $view)
    {
        $brands = Brand::all();
        return $view->with("brands",$brands);
    }
}