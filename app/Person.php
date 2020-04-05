<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Person extends Model
{
    public function hasUser()
    {
        return $this->hasOne('App\User', 'id_person', 'id');
    }

    public function hasGroups(){
        return $this->belongsToMany('App\Group', 'group_has_people', 'id_person', 'id_group');
    }
}
