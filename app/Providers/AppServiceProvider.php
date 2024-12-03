<?php

namespace App\Providers;

use App\Domain\Entities\Product;
use App\Domain\Repositories\AuthRepositoryInterface;
use App\Domain\Repositories\ProductRepositoryInterface;
use App\Infrastructure\API\ProductAPIClient;
use App\Infrastructure\API\AuthApiClient;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductAPIClient::class);
        $this->app->bind(AuthRepositoryInterface::class, AuthApiClient::class);
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
