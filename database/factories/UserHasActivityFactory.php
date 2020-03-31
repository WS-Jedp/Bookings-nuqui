<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User_has_activity;
use Faker\Generator as Faker;

$factory->define(User_has_activity::class, function (Faker $faker) {
    return [
        'id_user' => rand(1,10),
        'id_activity' => rand(1,5)
    ];
});
