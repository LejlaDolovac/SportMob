<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
      'title' => $faker->name,
      'text' => $faker->realText($maxNbChars = 3000, $indexSize = 2), //max chars
      'img' => $faker->imageUrl($width = 640, $height = 480, 'sports', true, 'Faker', true),
      'author' => $faker->name,
      'category' => $faker->randomElement($array = array ('Football','Basketball','Baseball')), // create categorys.
      'rank' => $faker->numberBetween($min = 1, $max = 3) // ranks the news from high to low.

    ];
});
