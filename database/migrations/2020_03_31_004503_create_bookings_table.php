<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->double('price', 8, 2);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('duration_stay');

            $table->unsignedInteger('id_group');
            $table->unsignedInteger('id_booking_state');

            $table->timestamps();

            $table->foreign('id_group')->references('id')->on('groups');
            $table->foreign('id_booking_state')->references('id')->on('booking_states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
