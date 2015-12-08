<?php

use Faker\Factory as Faker;
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


$factory->defineAs(App\User::class, 'admin', function ($faker) {
    $faker = Faker::create('id_ID');
    return [
        'name' => 'admin',
        'email' => 'admin@localhost.com',
        'password' => bcrypt('admin'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\User::class, function ($faker) {
    $faker = Faker::create('id_ID');
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Berita::class, function ($faker) {
    $faker = Faker::create('id_ID');
    //$jenis_kelamin =['laki-laki','perempuan'];
    return [
   // 	'jenis_kelamin' => suffle(jenis_kelamin);
        'judul' => ucfirst($faker->word),
        'slug' => $faker->slug,
        'isi'=>$faker->text($maxNbChars = 300),
      
    ];
});