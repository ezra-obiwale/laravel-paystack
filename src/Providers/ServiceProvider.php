<?php

namespace Paystack\Providers;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use Yabacon\Paystack;

class ServiceProvider extends IlluminateServiceProvider
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

        $this->mergeConfigFrom($this->configPath(), 'paystack');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            $this->configPath() => config_path('paystack.php'),
        ], 'paystack-config');
    }

    protected function configPath()
    {
        return dirname(__DIR__) . "/config/paystack.php";
    }
}
