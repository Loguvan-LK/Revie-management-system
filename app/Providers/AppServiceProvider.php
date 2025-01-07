<?php

namespace App\Providers;

use App\Commands\MigrateAndSeed;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register the custom command
        if ($this->app->runningInConsole()) {
            $this->commands([
                MigrateAndSeed::class,
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
