<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigInteger('identification_number');
            $table->bigInteger('account_number')->nullable();

            $table->unsignedBigInteger('id_person');
            $table->unsignedBigInteger('id_role');
            $table->unsignedBigInteger('id_state');

            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_person')->references('id')->on('people');
            $table->foreign('id_role')->references('id')->on('roles');
            $table->foreign('id_state')->references('id')->on('state_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
