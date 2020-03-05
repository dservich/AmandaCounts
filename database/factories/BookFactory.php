<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->words(),
        'genre' => $faker->word(),
        'page_count' => $faker->numberBetween(50, 500),
        'date_started' => $faker->dateTimeThisYear(),
        'date_completed' => $faker->dateTimeThisYear(),
        'comments' => $faker->text(),
        'rating' => $faker->numberBetween(0, 10)
    ];
});
