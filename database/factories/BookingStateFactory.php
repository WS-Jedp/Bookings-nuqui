<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking_state;
use Faker\Generator as Faker;

$factory->define(Booking_state::class, function (Faker $faker) {
    return [
        'state' => 'available'
    ];
});
