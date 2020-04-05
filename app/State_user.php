<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State_user extends Model
{
    public $timestamps = false;

    public function hasUsers(){
        return $this->hasMany('App\User', 'id_state', 'id');
    }
}
