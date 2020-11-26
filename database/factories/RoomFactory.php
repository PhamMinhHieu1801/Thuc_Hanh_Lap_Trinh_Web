<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Models\Room::class, function (Faker $faker) {
    $description = array("Phong co view song", "Phong co view bien", "Phong co view nui", "Phong danh cho khach VIP");
    $status = array(0,1);
    $type = array ("VIP", "Normal", "Trader");

    return [
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'price' => mt_rand(50,1000),
        'type' => $type[mt_rand(0,2)],
        'bed' => $status[mt_rand(0,1)],
        'bath' => $status[mt_rand(0,1)],
        'TV' => $status[mt_rand(0,1)],
        'wardobe' => $status[mt_rand(0,1)],
        'status' => $status[mt_rand(0,1)],
        'hotel_id' => mt_rand(0,50),
        'description' => $description[mt_rand(0,3)],
    ];
});
