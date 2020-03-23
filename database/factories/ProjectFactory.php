<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'name' => $faker->safeColorName(),
        'description' => Str::random(10)." ".Str::random(8)." ".Str::random(8),
        'days' => random_int(1, 100),
    ];
});
