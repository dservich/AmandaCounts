<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ShowEpisode;
use Faker\Generator as Faker;

$factory->define(ShowEpisode::class, function (Faker $faker) {
    return [
        'title' => $faker->words,
        'season' => $faker->numberBetween(1, 10),
        'comments' => $faker->text,
        'rating' => $faker->numberBetween(0, 10)
    ];
});
