<?php

namespace packages;

use Illuminate\Support\ServiceProvider;

class CustomeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // $this->app->make('packages/CustomeController');
        $this->loadViewsFrom(__DIR__.'/views','packages');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        include __DIR__.'/routes.php';
    }
}
