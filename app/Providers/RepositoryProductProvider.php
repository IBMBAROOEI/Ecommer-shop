<?php

namespace App\Providers;

use App\Repositories\ProductRepositories\ProductRepositories;
use App\Repositories\ProductRepositories\ProductRepositoriesInterface;
use App\Repositories\Sliderrepository\SliderRepositorylnterface;
use App\Repositories\Sliderrepository\SlidserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProductProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ProductRepositoriesInterface::class,ProductRepositories::class);
        $this->app->bind(SliderRepositorylnterface::class,SlidserRepository::class);
    }
}
