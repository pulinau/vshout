<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VolunteerEvent extends Model
{
    protected $table = 'volunteers_events';

    protected $fillable = [
        'event_id', 'volunteer_id'
    ];
}
