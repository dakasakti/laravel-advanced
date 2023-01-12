<?php

namespace App\Providers;

use App\Http\View\Composers\ChannelComposer;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use App\Mixins\StrMixins;
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

        // view composer
        // all view
        // View::share('datas', ["dakasakti", "kaila"]);

        // custom view
        // View::composer(["channel.index", "channel.create"], function ($view) {
        //     $view->with("datas", ["dakasakti", "kaila"]);
        // });

        // dedicated class
        View::composer(["channel.*"], ChannelComposer::class);
    }
}
