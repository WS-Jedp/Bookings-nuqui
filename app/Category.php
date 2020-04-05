<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function hasActivities(){
        return $this->belongsToMany('App\Activity', 'activity_has_categories', 'id_category', 'id_activity');
    }
}
