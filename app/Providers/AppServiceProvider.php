<?php

namespace App\Providers;

use App\Models\About;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $nav = ['partials.navFront', 'partials.navBack'];

        View::composer($nav, function ($view) {
            $about = About::with('avatar')->first(); 
            $view->with('about', $about);
        });
    }
}
