<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Group_state;
use Faker\Generator as Faker;

$factory->define(Group_state::class, function (Faker $faker) {
    return [
        'state' => 'disponible',
        'created_at' => now(),
        'updated_at' => now()
    ];
});
