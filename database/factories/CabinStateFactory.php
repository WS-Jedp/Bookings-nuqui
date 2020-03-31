<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cabin_state;
use Faker\Generator as Faker;

$factory->define(Cabin_state::class, function (Faker $faker) {
    return [
        'state' => 'available',
    ];
});
