<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\comunicado::class, function (Faker $faker)
{
    return [
        'descripcion' => $faker->realText(random_int(20,160)), 
        'fecha' => 'Puc, 01 de Marzo del 2018.', 
    ];
});
$factory->define(App\notasprensa::class, function (Faker $faker)
{
    return [
        'titulo' => 'NOTA DE PRENSA N° 002-2018-DREU-UGEL.CP/OII',
        'cuerpo'  => $faker->realText(random_int(20,160)),
        'fecha'  => 'Puc, 01 de Marzo del 2018.', 
        'imagen' => $faker->imageUrl(250,160)
    ];
});
