<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends User
{
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'id');
    }

    public function events()
    {
        return $this->belongsToMany('App\Event');
    }
}
