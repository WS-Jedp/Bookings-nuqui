<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking_has_plan;
use Faker\Generator as Faker;

$factory->define(Booking_has_plan::class, function (Faker $faker) {
    return [
        'id_plan' => rand(1,5),
        'id_booking' => rand(1,8),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
