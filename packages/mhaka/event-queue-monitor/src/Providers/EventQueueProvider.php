<?php

namespace Mhaka\EventQueueMonitor\Providers;

use Illuminate\Support\ServiceProvider;

class EventQueueProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'event-queue-monitor');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}