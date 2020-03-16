<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Medicamento;
use App\Horario;
use Illuminate\Support\Str;


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


$factory->define(Horario::class, function (Faker\Generator $faker) {
    return [
        'nombre_m' => $faker->word,
        'color'=>$faker->word,
    ];
});
$factory->define(Medicamento::class, function (Faker\Generator $faker) {
    return [
        'nombre_m' => $faker->word,
        'descripcion_m' => $faker->paragraph(1),
        'solucion_m' => $faker->word,
        'porcion_m' => $faker->word,
        'existencia' => $faker->word,
        'caducidad' => $faker->word,
     ];
});

