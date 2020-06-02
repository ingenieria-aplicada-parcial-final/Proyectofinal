<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Categoria;
use Faker\Generator as Faker;

$factory->define(Categoria::class, function (Faker $faker) {
    return [
          'nombre' => $faker->word,
          'descripcion' => $faker->text($maxNbChars = 30),
    ];
});