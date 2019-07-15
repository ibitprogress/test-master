<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone-number' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'status' => $faker->randomElement(['no-sales', 'prospect', 'customer','old-customer']),
        'buyer' =>$faker->boolean,
        'seller' =>$faker->boolean,
        'transporter' =>$faker->boolean,
    ];
});
