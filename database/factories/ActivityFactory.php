<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Activity;
use Faker\Generator as Faker;

$factory->define(Activity::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text(65),
        'image' => 'imgs/acitivityImage.jpg',
        'price' => $faker->randomNumber(6),
        'hours_duration' => rand(1,8),
        'available' => rand(0,1),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
