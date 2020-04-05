<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan_has_activity extends Model
{
    public $timestamps = false;

    public function hasState(){
        return $this->belongsTo('App\Activity_state', 'id_activity_state');
    }
}
