<?php

namespace  Sensy\Inspire\Providers;

use Illuminate\Support\ServiceProvider;
use Sensy\Inspire\Commands\InspireCommand;

class InspireServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap Services
     * @return void
     */
    public function boot()
    {
        # Loading routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        # Loading views
        $this->loadViewsFrom(__DIR__ . '/../views', 'inspire');
        # Loading migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        # Loading assets(Publishable assets)
        // php artisan vendor:publish --tag=inspire-public --force
        $this->publishes([
            __DIR__ . '/../public' => public_path('vendor/inspire'),
        ], 'inspire-public');

        // php artisan vendor:publish --tag=inspire-config --force
        $this->publishes([
            __DIR__ . '/../config/inspire.php' => config_path('inspire.php'),
        ], 'inspire-config');

        // php artisan vendor:publish --tag=inspire-views --force
        $this->publishes([
            __DIR__ . '/../views' => resource_path('views/vendor/inspire'),
        ], 'inspire-views');

        # Loading Commands
        $this->commands([
            InspireCommand::class,
        ]);
    }
}
