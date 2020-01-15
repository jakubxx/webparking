<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'username'    => $faker->unique()->userName,
        'password' => password_hash('123456', PASSWORD_BCRYPT),
        'first_name' => $faker->firstName,
        'second_name' => $faker->firstName,
        'pesel' => $faker->postcode,
        'nip' => $faker->postcode,
        'address' => $faker->address,
        'post_code' => $faker->postcode,
        'city' => $faker->city,
        'sex' => $faker->boolean,
    ];
});
