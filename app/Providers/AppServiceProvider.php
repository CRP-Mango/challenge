<?php

namespace App\Providers;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ApiService;
use App\Http\Services\PessoaService;
use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\DuskServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Schema::defaultStringLength(191);
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton(ApiService::class, function($app){
            return new ApiService();
        });

    }
}
