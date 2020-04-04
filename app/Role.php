<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\user;

class Role extends Model
{
    public $timestamps = false;

    public function hasUsers(){
        return $this->hasMany('App\User', 'id_role', 'id');
    }
}
