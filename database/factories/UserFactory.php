<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
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

$factory->define(App\Models\User::class, function (Faker $faker) {
    $image = "storage\image\account.png";
    $role = mt_rand(0, 1);
    $identity_card = array ("VIP", "Normal", "Trader");


    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => Hash::make('12345678'),
        'phone' => $faker->phoneNumber,
        'birthday' => $faker->date,
        'avatar' => $image,
        'role' => $role,
        'identity_card' => $identity_card[mt_rand(0,2)],
        'remember_token' => Str::random(10),
    ];
});
