<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Pengadu::class, function (Faker $faker) {
    return [
        'user_id' => 100,
        'nik_pengadu' => $faker->creditCardNumber,
        'nama_pengadu'=> $faker->name,
        'kategori_pengadu'=> $faker->randomElement(['Perorangan','Kelompok Masyarakat']),
        'alamat_pengadu'=>$faker->country,
        'telepon_pengadu' =>$faker->phoneNumber,
        'email_pengadu' => $faker->email,
        'password'=> 'rahasia',
        'avatar_pengadu' =>'',
    ];
});
