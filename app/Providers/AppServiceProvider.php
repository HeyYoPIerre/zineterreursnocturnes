<?php

namespace App\Providers;

use App\Models\Artiste;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer(['artistes'], function ($view) {
            $artistes = Artiste::with('images')->get();
            $view->with('artistes', $artistes);
        });
    }
}
