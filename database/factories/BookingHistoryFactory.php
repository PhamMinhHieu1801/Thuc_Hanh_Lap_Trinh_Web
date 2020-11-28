<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BookingHistory;
use Faker\Generator as Faker;

$factory->define(App\Models\BookingHistory::class, function (Faker $faker) {

    return [
        'user_id' => mt_rand(0,50),
        'room_id' => mt_rand(0,50),
        'check_in' => $faker->dateTime($max = 'now'),
        'check_out' =>  $faker->dateTime($max = 'now'),
    ];
});
