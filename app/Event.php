<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'event_name',
        'event_date',
        'description',
        'max_volunteers',
        'curr_volunteers'
    ];
}
