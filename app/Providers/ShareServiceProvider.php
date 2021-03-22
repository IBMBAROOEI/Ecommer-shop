<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Categorie;
use App\Models\Sub_Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ShareServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

             View::composer(['front.sidebar','backend.product.product','backend.product.edit','backend.brands.table'], function($view)
             {
                 $view->with('brands',Brand::all());
             });

}
}