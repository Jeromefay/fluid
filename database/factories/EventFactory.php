<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'titre' => $faker->sentence(),
        'description' => $faker -> paragraph(),
        'prix' => $faker -> randomDigit(),
        'prix_adherent' => $faker -> randomDigit(),
        'date' => $faker -> date(),
        'status' => $faker -> numberBetween($min = 1, $max = 2)
    ];
});
