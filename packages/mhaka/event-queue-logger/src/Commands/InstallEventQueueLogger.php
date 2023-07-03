<?php

namespace Mhaka\EventQueueLogger\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InstallEventQueueLogger extends Command
{
    protected $signature = 'event-queue-logger:install';

    protected $description = 'Install the EventQueueLogger package';

    public function handle()
    {
        $this->info('Installing EventQueueLogger package...');

        $this->call('vendor:publish', [
            '--tag' => 'eventqueuelogger-assets',
            '--force' => true,
        ]);
        Artisan::call('migrate');
    }
}
