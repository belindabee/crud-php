<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot()
    {
        \View::share('TA',2019);
    }
}
