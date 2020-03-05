<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->words,
        'genre' => $faker->word,
        'date_watched' => $faker->dateTimeThisYear,
        'comments' => $faker->text,
        'rating' => $faker->numberBetween(0, 10)
    ];
});
