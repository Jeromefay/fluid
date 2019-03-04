<?php

use Faker\Generator as Faker;

$factory->define(App\Partner::class, function (Faker $faker) {
    return [
        'nom' => $faker->sentence(),
        'description' => $faker -> paragraph()
    ];
});
