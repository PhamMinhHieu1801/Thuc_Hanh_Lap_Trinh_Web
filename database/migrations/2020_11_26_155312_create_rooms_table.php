<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->integer('price')->nullable();
            $table->boolean('status')->nullable();
            $table->unsignedBigInteger('hotel_id');
            $table->string('type')->nullable();
            $table->integer('bed')->nullable();
            $table->integer('bath')->nullable();
            $table->integer('TV')->nullable();
            $table->string('phone')->nullable();
            $table->integer('wardobe')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}