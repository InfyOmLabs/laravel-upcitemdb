<?php

namespace InfyOm\UPCItemDB;

use Illuminate\Support\ServiceProvider;

class UPCItemDBServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__.'/../config/upcitemdb.php';

        $this->publishes([
            $configPath => config_path('upcitemdb.php'),
        ]);
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('upcitemdb', function ($app) {
            return new UPCItemDBManager();
        });

    }
}