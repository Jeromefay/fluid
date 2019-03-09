<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'prenom' => $faker->firstName,
        'competence_1' => serialize($faker->words),
        'competence_2' => $faker->word,
        'competence_3' => $faker->word,
        'adresse' => $faker->streetAddress,
        'code_postal' => $faker->postcode,
        'ville' => $faker->city,
        'pays' => $faker->name,
        'date_naissance' => $faker->date,
        'telephone' => $faker->phoneNumber,
        'pseudo_facebook' => $faker->userName,
        'email_verified_at' => now(),
        'remember_token' => Str::random(10),
    ];
});
