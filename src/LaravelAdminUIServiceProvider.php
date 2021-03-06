<?php

namespace LNCH\LaravelAdminUI;

use Illuminate\Support\ServiceProvider;
use LNCH\LaravelAdminUI\View\Components\NavigationMenuItem;
use LNCH\LaravelAdminUI\View\Components\NavigationMenuTitle;
use LNCH\LaravelAdminUI\View\Components\NavigationSubMenu;
use LNCH\LaravelAdminUI\View\Components\SearchForm;

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
            ], 'public-assets');

            $this->publishes([
                __DIR__.'/../resources/sass' => base_path('resources/laravel-admin-ui/sass'),
                __DIR__.'/../resources/js' => base_path('resources/laravel-admin-ui/js'),
            ], 'assets');

            $this->publishes([
                __DIR__.'/../resources/views/partials' => resource_path('views/vendor/laravel-admin-ui/partials'),
            ], 'partial-views');
        }

        // Load in View Components
        $this->loadViewComponentsAs(config('laravel-admin-ui.views-namespace'), [
            SearchForm::class,
            NavigationMenuItem::class,
            NavigationMenuTitle::class,
            NavigationSubMenu::class,
        ]);

        // Register the views for the package
        $viewsNamespace = config('laravel-admin-ui.views-namespace', 'laravel-admin-ui');
        $this->loadViewsFrom(__DIR__.'/../resources/views', $viewsNamespace);
    }
}