<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\SellerRepository;
use App\Repositories\SaleRepository;
use App\Models\Seller;
use App\Models\Sale;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->bind(SellerRepository::class, function ($app) {
            return new SellerRepository(new Seller());
        });

        $this->app->bind(SaleRepository::class, function ($app) {
            return new SaleRepository(new Sale());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        //
    }
}
