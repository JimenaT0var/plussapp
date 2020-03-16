<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\horario;
use App\medicamento;
use App\dia;
use App\usuario;
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


$factory->define(horario::class, function (Faker\Generator $faker) {
    return [
        'hora_h' => $faker-> numberBetween(1,24),
        'color'=>$faker->word,
    ];
});

$factory->define(medicamento::class, function (Faker\Generator $faker) {
    return [
        'nom_m' => $faker->word,
        'desc_m' => $faker->paragraph(1),
        'solucion_m' => $faker->word,
        'porcion_m' => $faker->numberBetween(1,5),
        'existencia' => $faker->numberBetween(1,100),
        'caducidad' => $faker-> numberBetween(1,12),
     ];
});

$factory->define(dia::class, function (Faker\Generator $faker) {
    return [
        'dia' => $faker->randomElement(['Lunes', 'Martes', 'Miercoles', 'Jueves','Viernes', 'Sabado', 'Domingo']),

        'fecha'=>$faker-> numberBetween(1,12), //pendiente 
    ];
});

$factory->define(usuario::class, function (Faker\Generator $faker) {
    return [
        'nom_u' => $faker->word,
        'app_u' => $faker->word,
        'apm_u' => $faker->word,
        'fn_u' => $faker-> numberBetween(1,12), //pediente
        'genero_u' => $faker->randomElement(['F', 'M']),
        'col_u' => $faker->word,
        'typeuser' => $faker->randomElement(['Admin', 'Usuario']),
        'calle_u' => $faker->word,
        'mum_u' => $faker->word,
        'correo' => $faker->word,
        'vercorreo' => $faker->word,
        'password' => $faker->word,
        'verpassword' => $faker->word,
     ];
});
