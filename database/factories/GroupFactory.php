<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Group;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'id_state' => rand(1,3),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
