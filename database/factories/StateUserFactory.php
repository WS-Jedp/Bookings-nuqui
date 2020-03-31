<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\State_user;
use Faker\Generator as Faker;

$factory->define(State_user::class, function (Faker $faker) {
    return [
        'name' => 'Caminata por la playa'
    ];
});
