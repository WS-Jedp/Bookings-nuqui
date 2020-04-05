<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function hasUsers(){
        return $this->belongsToMany('App\User', 'user_has_activities', 'id_activity', 'id_user');
    }
    
    public function hasPlans(){
        return $this->belongsToMany('App\Plan', 'plan_has_activities', 'id_activity', 'id_plan');
    }
    
    public function hasCategories(){
        return $this->belongsToMany('App\Category', 'activity_has_categories', 'id_activity', 'id_category');
    }
}
