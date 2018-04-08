<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    $sex = rand(1, 1000);
    return [
        'name'           => $faker->name,
        'sex'            => $sex % 2 == 0 ? '男' : '女',
        'email'          => $faker->unique()->safeEmail,
        'favorite_color' => $faker->safeColorName,
        'phone'          => $faker->phoneNumber,
        'addr'           => $faker->address,
    ];
});
