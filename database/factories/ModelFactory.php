<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'tipo' =>$faker->randomElement(['Administrador','Normal']),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\CentroModel::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->name,
        'direccion' => $faker->address,
        'region' =>$faker->randomElement(['Costa','Istmo','Papaloapn','Sierra Norte','Sierra Sur','Cañada','Mixteca','Valles Centrales']),
        'codigoPostal' => $faker->postcode,
        'telefono' => $faker->phoneNumber,
        'responsable' => $faker->name($gender = null|'male'|'female'),

    ];
});


$factory->define(App\Evento::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->name,
        'fecha' => $faker->date($format='Y-m-d', $max='2020-12-25'),
        'lugar'=>$faker->address,
'descripcion' =>$faker->text($maxNbChars = 200),
        'imagen'=> $faker->imageUrl($width = 506, $height = 295),
        'categoria_id' => factory(App\Categoria::class)->create()->id,
        'centroOrganizador' => factory(App\CentroModel::class)->create()->id,
        'encargado' =>$faker->name,
    ];
});


$factory->define(App\Album::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->name,
        'descripcion' =>$faker->text($maxNbChars = 200),
        'imagen'=> $faker->imageUrl($width = 506, $height = 295),
        'evento_id' => factory(App\Evento::class)->create()->id,
    ];
});


$factory->define(App\Imagen::class, function (Faker\Generator $faker) {
    return [
        
        'imagen'=> $faker->imageUrl($width = 506, $height = 295),
        'descripcion' =>$faker->text($maxNbChars = 200),
        'album_id' => factory(App\Album::class)->create()->id,
    ];
});


$factory->define(App\Categoria::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->name,
        'descripcion' =>$faker->text($maxNbChars = 200),
    ];
});
