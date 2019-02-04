<?php

namespace ChromeHeadless\Laravel;

use Illuminate\Support\ServiceProvider;

class ChromeHeadlessServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/chrome.php' => config_path('chrome.php'),
        ]);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/chrome.php', 'chrome');
    }
}
