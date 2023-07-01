<?php

use Illuminate\Support\Facades\Route;
use Mhaka\EventQueueMonitor\Controllers\EventController;
use Mhaka\EventQueueMonitor\Controllers\QueueController;

Route::get('events', EventController::class);
Route::get('queues', QueueController::class);