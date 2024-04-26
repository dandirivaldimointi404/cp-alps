<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Visitor;
use View;

class VisitorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Memasang middleware TrackVisitors ke grup web
        $this->app['router']->pushMiddlewareToGroup('web', \App\Http\Middleware\TrackVisitors::class);

        // Membagikan visitorCount ke semua tampilan
        View::composer('*', function ($view) {
            $visitorCount = Visitor::count();
            $view->with('visitorCount', $visitorCount);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
