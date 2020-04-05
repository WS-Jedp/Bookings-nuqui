<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabin extends Model
{
    public function hasState(){
        return $this->belongsTo('App\Cabin_state', 'id_state');
    }
}
