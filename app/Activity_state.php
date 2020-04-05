<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity_state extends Model
{
    public $timestamps = false;

    public function hasActivities(){
        return $this->hasMany('App\Plan_has_activity', 'id_activity_state', 'id');
    }
}
