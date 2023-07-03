<?php
namespace Mhaka\EventQueueLogger\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Mhaka\EventQueueLogger\Jobs\JobLogger;

class JobLoggerController extends Controller
{
    public function index()
    {
        $jobs = JobLogger::all();

        return response()->json($jobs);
    }

    public function show($id)
    {
        $job = JobLogger::findOrFail($id);

        return response()->json($job);
    }
}