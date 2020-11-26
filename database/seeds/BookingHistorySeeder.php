<?php

use Illuminate\Database\Seeder;

class BookingHistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\BookingHistory::class, 50)->create();
    }
}
