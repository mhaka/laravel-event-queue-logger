<?php

namespace Mhaka\EventQueueLogger\Events;

use Illuminate\Database\Eloquent\Model;

class EventLogger extends Model
{
    protected $table = 'event_logger';

    protected $fillable = ['event_name', 'event_data', 'occurred_at'];
}
