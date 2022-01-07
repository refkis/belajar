<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Pejabat::class, function (Faker $faker) {
    return [
        'user_id' => 100,
        'nip_pejabat' => $faker->creditCardNumber,
        'nama_pejabat'=> $faker->name,
        'kategori_pejabat'=> $faker->randomElement(['Pelayanan','Infrastruktur','Lingkungan']),
        'jabatan'=>$faker->randomElement(['Kepala Dinas','Kepala Bidang','Seksi','Operator']),
        'telepon_pejabat' =>$faker->phoneNumber,
        'email_pejabat' => $faker->email,
        'password'=> 'rahasia',
        'avatar_pejabat' =>'',
    ];
});
