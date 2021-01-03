<?php

namespace App\Providers;

use App\Patterns\Singleton\Interfaces\LaravelSingletonInterface;
use App\Patterns\Singleton\LaravelSingleton;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
        LaravelSingletonInterface::class => LaravelSingleton::class,
    ];

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
        //
    }
}
