<?php

namespace ducsatthu\maxcms;

use Illuminate\Support\ServiceProvider;

class maxcmsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->router->group(['namespace' => 'ducsatthu\maxcms\Http\Controllers'],
            function(){
                require __DIR__.'/Http/routes.php';
            });

        $this->loadViewsFrom(base_path('MaxcmsThemes/views'), 'maxcms');

        $this->publishes([
            __DIR__ . '/views' => base_path('MaxcmsThemes/views')
        ]);

        $this->publishes([
            __DIR__ . '/migrations' => database_path('/migrations')
        ], 'migrations');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {

    }
}