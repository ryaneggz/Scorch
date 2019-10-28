<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    // Owner has one User
    public function User()
    {
        return $this->hasOne('App\User');
    }
}
