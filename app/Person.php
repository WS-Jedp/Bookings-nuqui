<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Person extends Model
{
    public function hasUser()
    {
        return $this->hasOne(User::class, 'id_person', 'id');
    }
}
