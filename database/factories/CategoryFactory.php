<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => 'romantic',
        'description' => $faker->text(45),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
