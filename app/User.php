<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Person;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hasPerson()
    {
        return $this->belongsTo('App\Person', 'id_person');
    }

    public function hasRole(){
        return $this->belongsTo('App\Role', 'id_role');
    }

    public function hasActivities(){
        return $this->belongsToMany('App\Activity', 'user_has_activities', 'id_user', 'id_activity');
    }

    public function hasState(){
        return $this->belongsTo('App\State_user', 'id_state', 'id');
    }

}
