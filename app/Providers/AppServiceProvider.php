<?php

namespace App\Providers;

use App\Domain\Products\ProductRepository;
use App\Domain\Products\ProductRepositoryInterface;
use App\Domain\Products\ProductService;
use App\Domain\Products\ProductServiceInterface;
use App\Domain\Products\Type\ProductTypeRepository;
use App\Domain\Products\Type\ProductTypeRepositoryInterface;
use App\Domain\Products\Type\ProductTypeService;
use App\Domain\Products\Type\ProductTypeServiceInterface;
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

        $this->app->bind(ProductTypeServiceInterface::class, ProductTypeService::class);
        $this->app->bind(ProductTypeRepositoryInterface::class, ProductTypeRepository::class);
    }
}
