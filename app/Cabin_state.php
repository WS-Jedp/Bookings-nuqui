<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabin_state extends Model
{
    public $timestamps = false;

    public function hasCabins(){
        return $this->hasMany('App\Cabin', 'id_state', 'id');
    }
}
