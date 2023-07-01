<?php
namespace Mhaka\EventQueueMonitor\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class EventController
{
    public function __invoke(Request $request) {

        return view('event-queue-monitor::index');
    }
}