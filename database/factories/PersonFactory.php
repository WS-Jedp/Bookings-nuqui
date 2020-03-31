<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'last_name' => $faker->lastName,
        'birthdate' => $faker->date,
        'state' => rand(0,1),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
