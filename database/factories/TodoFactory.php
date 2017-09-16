<?php

use Faker\Generator as Faker;
use App\Todo;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'task' => $faker->sentence,
        'done' => rand(0, 1)
    ];
});
