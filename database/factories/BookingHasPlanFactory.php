<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking_has_plan;
use Faker\Generator as Faker;

$factory->define(Booking_has_plan::class, function (Faker $faker) {
    return [
        'id_plan' => rand(1,10),
        'id_booking' => rand(1,10),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
