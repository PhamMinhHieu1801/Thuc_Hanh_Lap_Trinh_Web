<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hotel;
use Faker\Generator as Faker;

$factory->define(App\Models\Hotel::class, function (Faker $faker) {
  $local = array ("Quynh Phu, Thai Binh", "Trieu Son, Thanh Hoa", "Ba Dinh, Ha Noi", "Thanh Xuan, Ha Noi", "Yen Nghia, Vinh Phuc", "Tien Hai, Thai Binh");
  $description = "Nha co day du, tien nghi, dap ung yeu cau cua quy khach";
  $wifi =  array (0, 1);
  
  $rating = mt_rand(0,5);

    return [
        'name' => $faker->name,
        'local' => $local[mt_rand(0,5)],
        'description' => $description,
        'wifi' => $wifi[mt_rand(0,1)],
        'car_park' => $wifi[mt_rand(0,1)],
       'breakfast' => $wifi[mt_rand(0,1)],
        'rating' => $rating,
    ];
});
