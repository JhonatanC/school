<?php

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'last_name' => $faker->name,
        'username' => $faker->name,
        'type' => $faker->randomElement(['teaching','student']),
        'avatar' =>$faker->imageUrl($width = 200, $height = 200),
        'email' => $faker->email,
        'password' => bcrypt(1234),
    ];
});

$factory->define(App\Models\Subject::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'user_id' => rand(1,9)
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
        'user_id' => rand(1,9),
        'subject_id' => rand(1,10)
    ];
});