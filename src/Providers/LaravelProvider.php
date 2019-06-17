<?php

namespace Paystack\Providers;

use Illuminate\Support\ServiceProvider;
use Yabacon\Paystack;

class LaravelProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('paystack', function ($app) {
            return new Paystack($app['config']['paystack']['secret_key']);
        });

        $this->mergeConfigFrom(
            __DIR__ . '/config/paystack.php',
            'paystack'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/paystack.php' => config_path('paystack.php'),
        ], 'paystack-config');
    }
}
