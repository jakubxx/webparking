<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Parking;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Parking::class, function (Faker $faker) {
    return [
        'start_hour'    => $faker->time(),
        'start_img'    => $faker->imageUrl(),
        'end_hour'    => $faker->time(),
        'end_img'    => $faker->imageUrl(),
        'registration'    => $faker->creditCardNumber(),
    ];
});
