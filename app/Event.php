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
        'curr_volunteers',
        'host_id'
    ];

    public function feedbacks()
    {
        return $this->hasMany('App\Feedback');
    }

    public function volunteers()
    {
        return $this->belongsToMany('App\Volunteer');
    }

    public function host()
    {
        return $this->belongsTo('App\Host', 'hosts_events', 'id', 'event_id');
    }
}
