<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {
    return [
        'price' => $faker->randomNumber(8),
        'start_date' => $faker->dateTimeBetween(now(), '2020-08-15 02:00:49', null),
        'end_date' => $faker->dateTimeBetween(now(), '2020-08-15 02:00:49', null),
        'duration_stay' => rand(1,3),
        'id_group' => rand(1,5),
        'id_booking_state' => rand(1,3),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
