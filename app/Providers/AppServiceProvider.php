<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (getenv('APP_ENV') !== 'local') {
            $this->app['request']->server->set('HTTPS', true);
        }
        if (getenv('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (getenv('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }
    }
}
