<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking_state extends Model
{
    public $timestamps = false;

    public function hasBookins(){
        return $this->hasMany('App\Booking', 'id_booking_state', 'id');
    }
}
