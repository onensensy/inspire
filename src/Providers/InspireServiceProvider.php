<?php

namespace  Sensy\Inspire\Providers;

use Illuminate\Support\ServiceProvider;

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
        $this->loadViewsFrom(__DIR__ . '/../views', 'inspire');
    }
}
