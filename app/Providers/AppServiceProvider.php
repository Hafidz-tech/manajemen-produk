<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ProdukRepositoryInterface;
use App\Repositories\ProdukRepository;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProdukRepositoryInterface::class, ProdukRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
