<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Host extends User
{
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'id');
    }
}
