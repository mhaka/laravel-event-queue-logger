<?php

namespace Mhaka\EventQueueLogger\Jobs;

use Illuminate\Database\Eloquent\Model;

class JobLogger extends Model
{
    protected $table = 'job_logger';

    protected $fillable = ['job_name', 'job_data', 'queued_at', 'started_at', 'completed_at'];
}
