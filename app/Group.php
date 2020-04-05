<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    public function hasBookings(){
        return $this->hasMany('App\Booking', 'id_group', 'id');
    }

    public function hasState(){
        return $this->belongsTo('App\Group_state', 'id_state');
    }

    public function hasPeople(){
        return $this->belongsToMany('App\Person', 'Group_has_people', 'id_group', 'id_person');
    }
}
