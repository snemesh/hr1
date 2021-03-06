<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('group_id')->nullable();
            $table->string('position_id')->nullable();
            $table->string('jiralogin')->nullable();
            $table->double('salary')->nullable();
            $table->double('rate')->nullable();
            $table->dateTime('hired')->nullable();
            $table->dateTime('fired')->nullable();
            $table->dateTime('updated')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->string('comments')->nullable();
            $table->boolean('enable')->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
