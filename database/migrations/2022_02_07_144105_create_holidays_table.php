<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            $table->string("country", 200);
            $table->string("city", 100);
            $table->date("holiday_start");
            $table->date("holiday_end");
            $table->string("transport_type");
            $table->boolean("transport_inclusion");
            $table->string("hotel_address", 100);
            $table->tinyInteger("hotel_rating")->unsigned();
            $table->string("room_type", 20);
            $table->smallInteger("price");
            $table->boolean("confirmed");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('holidays');
    }
}
