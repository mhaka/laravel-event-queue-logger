<?php
namespace Mhaka\EventQueueLogger\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Mhaka\EventQueueLogger\Events\EventLogger;

class EventController extends Controller
{
    public function index()
    {
        $events = EventLogger::all();
        $events = response()->json($events);
        $events = $events->getData();

        return view('event-queue-logger::index', compact('events'));

    }


    public function show($id)
    {
        $event = EventLogger::findOrFail($id);

        return response()->json($event);
    }
}
