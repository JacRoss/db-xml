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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'reputation' => $faker->randomNumber(),
        'created_at' => $faker->dateTime,
        'name' => $faker->name,
        'last_logon_date' => $faker->dateTime,
        'website_url' => $faker->url,
        'location' => $faker->country,
        'about_me' => $faker->text,
        'views' => $faker->randomNumber(),
        'up_votes' => $faker->randomNumber(),
        'down_votes' => $faker->randomNumber(),
        'account_id' => $faker->randomNumber(),
    ];
});
