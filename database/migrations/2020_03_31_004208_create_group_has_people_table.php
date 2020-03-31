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
            $table->unsignedInteger('id_group');
            $table->unsignedInteger('id_person');
            $table->timestamps();

            $table->foreign('id_group')->references('id')->on('groups');
            $table->foreign('id_persons')->references('id')->on('persons');
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
