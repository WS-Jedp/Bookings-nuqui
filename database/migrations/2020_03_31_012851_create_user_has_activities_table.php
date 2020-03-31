<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserHasActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_has_activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_activity');

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_activity')->references('id')->on('activities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_has_activities');
    }
}
