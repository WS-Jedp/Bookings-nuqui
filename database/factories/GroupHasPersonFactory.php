<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Group_has_person;
use Faker\Generator as Faker;

$factory->define(Group_has_person::class, function (Faker $faker) {
    return [
        'id_group' => rand(1,10),
        'id_person' => rand(1,10),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
