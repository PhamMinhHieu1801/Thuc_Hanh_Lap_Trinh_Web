<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Feedback;
use Faker\Generator as Faker;

$factory->define(App\Models\Feedback::class, function (Faker $faker) {
    $description = array("Phong co view song, khach san tan tam", "Nhan vien khong co tam", "Phong xin xo", "Phong danh cho khach VIP");
    
    return [
        'user_id' => mt_rand(0,50),
        'booking_id' => mt_rand(0,50),
        'date' => $faker->date,
        'description' => $description[mt_rand(0,3)],
        'rating' => mt_rand(0,5),

    ];
});
