<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BookingInfor;
use Faker\Generator as Faker;

$factory->define(App\Models\BookingInfor::class, function (Faker $faker) {
    $local = array ("Quynh Phu, Thai Binh", "Trieu Son, Thanh Hoa", "Ba Dinh, Ha Noi", "Thanh Xuan, Ha Noi", "Yen Nghia, Vinh Phuc", "Tien Hai, Thai Binh");
    $breakfast = array (0, 1);
    $memo = array("abc", "cde","effg");

    return [
        'user_id' => mt_rand(0,50),
        //'date_in' => $faker->date,
        //'date_out' => $faker->date,
        'children' => mt_rand(0,3),
        'alduts' => mt_rand(1,5),
        //'local' => $local[mt_rand(0,5)],
        //'breakfast' => $breakfast[mt_rand(0,1)],
        //'wifi' => $breakfast[mt_rand(0,1)],
       // 'car_park' => $breakfast[mt_rand(0,1)],
        //'memo' => $memo[array(0,2)],
    ];
});
