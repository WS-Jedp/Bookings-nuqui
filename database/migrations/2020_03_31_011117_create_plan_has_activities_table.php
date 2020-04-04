<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanHasActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_has_activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_plan');
            $table->unsignedBigInteger('id_activity');
            $table->unsignedBigInteger('id_activity_state');
            $table->dateTime('start_date');

            $table->foreign('id_plan')->references('id')->on('plans');
            $table->foreign('id_activity')->references('id')->on('activities');
            $table->foreign('id_activity_state')->references('id')->on('activity_states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_has_activities');
    }
}
