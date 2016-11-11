<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Job::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->title,
        'status' => $faker->randomElement(['offline', 'online']),
        'description' => $faker->paragraph(1)
    ];
});

$factory->define(App\Application::class, function (Faker\Generator $faker) {
    return [
        'user_id' => App\User::inRandomOrder()->first()->id,
        'qualification' => $faker->title,
        'status' => $faker->randomElement(['rejected','in-review','short-listed','offered','hired']),
        'description' => $faker->paragraph(8),
    ];
});
