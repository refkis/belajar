<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Aduan::class, function (Faker $faker) {
    return [
        'user_id' => 100,
        'kategori_aduan'=> $faker->randomElement(['Pelayanan','Infrastruktur','Lingkungan']),
        'judul_aduan'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
        'detail_aduan'=> $faker->text($maxNbChars = 200),
         'foto_aduan' =>'',
    ];
});
