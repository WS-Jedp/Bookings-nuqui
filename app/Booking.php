<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function hasGroup(){
        return $this->belongsTo('App\Group', 'id_group');
    }

    public function hasPlans(){
        return $this->belongsToMany('App\Plan', 'booking_has_plans', 'id_booking', 'id_plan');
    }

    public function hasState(){
        return $this->belongsTo('App\Booking_state', 'id_booking_state');
    }
}
