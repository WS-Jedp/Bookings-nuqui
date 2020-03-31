<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\activity_has_category;
use Faker\Generator as Faker;

$factory->define(activity_has_category::class, function (Faker $faker) {
    return [
        'id_category' => rand(1,4),
        'id_activity' => rand(1,4),
    ];
});
