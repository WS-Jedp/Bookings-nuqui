<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image');
            $table->smallInteger('beds_number');
            $table->smallInteger('bathrooms_number');
            $table->double('price', 8, 2);
            $table->unsignedInteger('id_state');

            $table->timestamps();

            $table->foreign('id_state')->references('id')->on('cabin_states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cabins');
    }
}
