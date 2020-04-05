<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group_state extends Model
{
    public function hasGroups(){
        return $this->hasMany('App\Group', 'id_state', 'id');
    }
}
