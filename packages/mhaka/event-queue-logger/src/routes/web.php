<?php

use Illuminate\Support\Facades\Route;
use Mhaka\EventQueueLogger\Http\Controllers\EventController;
use Mhaka\EventQueueLogger\Http\Controllers\JobLoggerController;


Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{id}', [EventController::class, 'show']);

Route::get('/queues', [JobLoggerController::class, 'index']);
Route::get('/queues/{id}', [JobLoggerController::class, 'index']);
