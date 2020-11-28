<?php

use Illuminate\Database\Seeder;

class BookingInforTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\BookingInfor::class, 50)->create();
    }
}
