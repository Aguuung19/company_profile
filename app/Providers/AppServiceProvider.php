<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\landing_page;
use App\Models\footer_link;

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
            $view->with("footer1", footer_link::where("section", "1")->get());
            $view->with("footer2", footer_link::where("section", "2")->get());
        });
    }
}
