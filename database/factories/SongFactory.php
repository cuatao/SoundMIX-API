<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'length' => $faker->randomFloat(),
        'lyric' => $faker->text,
        'path' => $faker->url,
        'thumbnail' => $faker->imageUrl('500', '500'),
        'listenCount' => $faker->randomNumber(),
        'downloaded' => $faker->randomNumber(),
    ];
});
