<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupHasPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_has_people', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_group');
            $table->unsignedBigInteger('id_person');
            $table->timestamps();

            $table->foreign('id_group')->references('id')->on('groups');
            $table->foreign('id_person')->references('id')->on('people');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_has_people');
    }
}
