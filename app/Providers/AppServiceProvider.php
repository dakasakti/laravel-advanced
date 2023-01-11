<?php

namespace App\Providers;

use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use App\Mixins\StrMixins;

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
        Str::macro('orderId', function ($number) {
            return "ORDERS-" . substr($number, 0, 3) . "-" . substr($number, 3);
        });

        Str::mixin(new StrMixins(), false);

        ResponseFactory::macro('errorJSON', function ($message = "INTERNAL_SERVER_ERROR") {
            return [
                "code" => 500,
                "message" => $message,
            ];
        });
    }
}
