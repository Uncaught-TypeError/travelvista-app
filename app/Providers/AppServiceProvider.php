<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
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
        // php artisan lang:publish and declare the message inside return
        Validator::extend('not_today_or_past', function($attribute, $value, $parameters, $validator){
            $nextDay = date('Y-m-d', strtotime('+1 day'));

            return $value >= $nextDay;
        });
    }
}
