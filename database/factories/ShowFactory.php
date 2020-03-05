<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Show;
use Faker\Generator as Faker;

$factory->define(Show::class, function (Faker $faker) {
    return [
        'title' => $faker->words,
        'genre' => $faker->word,
        'episode_count' => $faker->numberBetween(1, 35),
        'date_started' => $faker->dateTimeThisYear,
        'date_completed' => $faker->dateTimeThisYear,
        'comments' => $faker->text,
        'rating' => $faker->numberBetween(0, 10)
    ];
});
