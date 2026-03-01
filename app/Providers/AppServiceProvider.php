<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\ServeCommand;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
            if ($this->app->runningInConsole()) {
            // Add Windows mixed-case variables to the whitelist
            ServeCommand::$passthroughVariables[] = 'SystemRoot';
            ServeCommand::$passthroughVariables[] = 'Path';
            ServeCommand::$passthroughVariables[] = 'windir';
        }
    }
}
