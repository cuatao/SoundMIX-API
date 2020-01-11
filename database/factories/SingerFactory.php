<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Singer;
use Faker\Generator as Faker;

$factory->define(Singer::class, function (Faker $faker) {
    return [
        'name' => $faker->name(null),
        'age' => $faker->randomNumber(),
        'description' => $faker->text,
        'thumbnail' => $faker->imageUrl('500', '500'),
    ];
});
