<?php

namespace App\Providers;

use App\Domain\Products\ProductRepository;
use App\Domain\Products\ProductRepositoryInterface;
use App\Domain\Products\ProductService;
use App\Domain\Products\ProductServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductServiceInterface::class, ProductService::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
    }
}
