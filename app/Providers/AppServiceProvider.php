<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\landing_page;

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
        view()->composer("*", function ($view) {
            $view->with("home", landing_page::first());
        });
    }
}
