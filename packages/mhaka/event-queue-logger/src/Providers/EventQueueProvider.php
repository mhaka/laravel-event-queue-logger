<?php

namespace Mhaka\EventQueueLogger\Providers;
use Mhaka\EventQueueLogger\Commands\InstallEventQueueLogger;
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
        $this->loadViewsFrom(__DIR__.'/../views', 'event-queue-logger');

        // Publish the assets
        $this->publishes([
            __DIR__ . '/../resources/js' => resource_path('js/mhaka/event-queue-logger'),
        ], 'eventqueuelogger-assets');

        // Register the migration files
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    public function register()
    {
        $this->commands([
            InstallEventQueueLogger::class,
            \Mhaka\EventQueueLogger\Commands\InstallEventQueueLogger::class,
        ]);
    }
}