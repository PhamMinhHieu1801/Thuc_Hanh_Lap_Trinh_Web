<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingInforsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_infors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->integer('children');
            $table->integer('alduts');
            $table->longText('local')->nullable();
            $table->boolean('car_park')->nullable();
            $table->boolean('breakfast')->nullable();
            $table->boolean('wifi')->nullable();
            $table->longText('memo')->nullable();
            $table->date('date_in')->nullable();
            $table->date('date_out')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_infors');
    }
}
