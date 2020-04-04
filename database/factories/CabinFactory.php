<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cabin;
use Faker\Generator as Faker;

$factory->define(Cabin::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text(70),
        'image' => 'imgs/cabing.jpg',
        'beds_number' => rand(1,3),
        'bathrooms_number' => rand(1,3),
        'price' => $faker->randomNumber(6),
        'id_state' => rand(1,3),
        'created_at' => now(),
        'updated_at' => now(), 
    ];
});
