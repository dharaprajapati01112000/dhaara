<?php

namespace First\Test;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        // register our controller
    $this->app->make('First\Test\FirstController');
    $this->loadViewsFrom(__DIR__.'/views', 'test');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
    }
}
