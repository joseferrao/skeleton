<?php

use Faker\Generator as Faker;

$factory->define(App\Domains\Users\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
    ];
});

$factory->define(App\Domains\Contacts\Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
