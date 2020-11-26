<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(HotelTableSeeder::class);
        $this->call(RoomTableSeeder::class);
        $this->call(BookingInforTableSeeder::class);
        $this->call(BookingHistoryTableSeeder::class);
        $this->call(FeedbackTableSeeder::class);
       //neu bị lỗi ko tạo dc seeder : chạy lệnh composer dump-autoload
    }
}
