<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\landing_page;
use App\Models\footer_link;
use Illuminate\Support\Facades\View;

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
    View::composer('*', function ($view) {
        $view->with([
            'home' => landing_page::first(),
            'footer1' => footer_link::where('section', 1)->get(),
            'footer2' => footer_link::where('section', 2)->get(),
        ]);
    });
}
}
