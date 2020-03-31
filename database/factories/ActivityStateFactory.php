<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Activity_state;
use Faker\Generator as Faker;

$factory->define(Activity_state::class, function (Faker $faker) {
    return [
        'state' => 'available'
    ];
});
