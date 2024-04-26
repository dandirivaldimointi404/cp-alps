<?php

namespace App\Providers;

use App\Http\Middleware\TrackPengunjung;
use App\Models\Pengunjung;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class VisitorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['router']->pushMiddlewareToGroup('web', TrackPengunjung::class);

        View::composer('*', function ($view) {
            $visitorCount = Pengunjung::count();
            $view->with('visitorCount', $visitorCount);
        });
    }
}
