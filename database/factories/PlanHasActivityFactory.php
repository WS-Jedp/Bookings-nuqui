<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Plan_has_activity;
use Faker\Generator as Faker;

$factory->define(Plan_has_activity::class, function (Faker $faker) {
    return [
        'id_plan' => rand(1,3),
        'id_activity' => rand(1,5),
        'id_activity_state' => rand(1,3),
        'start_date' => $faker->dateTimeBetween(now(), '2020-08-15 02:00:49', null),
    ];
});
