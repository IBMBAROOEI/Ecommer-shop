<?php

namespace App\Providers;

use App\Models\Attr__Product;
use App\Models\Categorie;
use App\Observers\Attr__ProductObserver;
use App\Veiw\Composer\CateComposer;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Attr__Product::observe(Attr__ProductObserver::class);
        Paginator::useBootstrap();
        Schema::defaultStringLength(191);

        view()->composer(['backend.categorei.categorei',
                'backend.categorei.edit',
                'backend.product.edit','backend.product.product','front.navbar','front.sidebar']
            ,CateComposer::class);

        view()->composer(['front.sidebar']
            ,CateComposer::class);

    }
}

