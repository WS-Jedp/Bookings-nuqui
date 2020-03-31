<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Plan;
use Faker\Generator as Faker;

$factory->define(Plan::class, function (Faker $faker) {
    return [
        'name' => 'Incursion en la selva',
        'description' => $faker->text(150),
        'price' => $faker->randomNumber(8),
        'duration_days' => rand(1, 4),
    ];
});
