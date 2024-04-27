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
        // $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        # Loading assets
        // $this->publishes([
        //     __DIR__ . '/../public' => public_path('vendor/inspire'),
        // ], 'public');
        # Loading Commands
        $this->commands([
            InspireCommand::class,
        ]);
    }
}
