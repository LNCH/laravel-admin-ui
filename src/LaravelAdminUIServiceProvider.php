<?php

namespace LNCH\LaravelAdminUI;

use Illuminate\Support\ServiceProvider;

class LaravelAdminUIServiceProvider extends ServiceProvider
{
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        // Merge in the package config
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-admin-ui.php', 'laravel-admin-ui');
    }

    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            // Make config available to the app
            $this->publishes([
                __DIR__.'/../config/laravel-admin-ui.php' => config_path('laravel-admin-ui.php'),
            ], 'config');

            // Publish public assets
            $this->publishes([
                __DIR__.'/../dist' => public_path('laravel-admin-ui'),
            ], 'assets');
        }

        // Register the views for the package
        $viewsNamespace = config('laravel-admin-ui.views-namespace', 'laravel-admin-ui');
        $this->loadViewsFrom(__DIR__.'/../resources/views', $viewsNamespace);
    }
}