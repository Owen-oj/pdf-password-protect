<?php

namespace Owenoj\PDFPasswordProtect;

use Illuminate\Support\ServiceProvider;

class PDFPasswordProtectServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('pdf-password-protect.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'pdf-password-protect');

        // Register the main class to use with the facade
        $this->app->singleton('pdf-password-protect', function () {
            return new PDFPasswordProtect();
        });
    }
}
