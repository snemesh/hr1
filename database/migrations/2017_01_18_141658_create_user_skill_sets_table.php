<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSkillSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_skill_sets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            //$table->foreign('user_id')->references('id')->on('users');

            $table->integer('skill_id')->nullable();
            //$table->foreign('skill_id')->references('id')->on('skill');

            $table->double('skill_current_rate')->nullable();
            $table->date('skill_date_set')->nullable();
            $table->string('skill_accepted_by')->nullable();
            $table->string('comments')->nullable();
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
        Schema::dropIfExists('user_skill_sets');
    }
}
