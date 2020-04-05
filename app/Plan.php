<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public $timestamps = false;

    public function hasActivities(){
        return $this->belongsToMany('App\Activity', 'plan_has_activities', 'id_plan', 'id_activity');
    }

    public function hasBookings(){
        return $this->belongsToMany('App\Booking', 'booking_has_plans', 'id_plan', 'id_booking');
    }
}
