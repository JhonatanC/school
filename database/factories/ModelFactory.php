<?php

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'last_name' => $faker->name,
        'username' => $faker->name,
        'type' => $faker->randomElement(['teaching','student']),
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Subject::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'user_id' => rand(1,100)
    ];
});

$factory->define(App\Models\Score::class, function (Faker\Generator $faker) {
    return [
        'score' => 5,
        'user_id' => rand(1,5)
    ];
});

$factory->define(App\Models\Grade::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'user_id' => rand(1,100),
        'subject_id' => rand(1,10)
    ];
});