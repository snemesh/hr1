<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSkillSetPlanedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_skill_set_planeds', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('skill_id')->nullable();
            $table->integer('user_id')->nullable();


            $table->double('skill_current_rate')->nullable();
            $table->date('skill_planed_date')->nullable();
            $table->date('skill_was_planed_date')->nullable();
            $table->string('skill_will_accepted_by')->nullable();
            $table->string('skill_was_set_by')->nullable();
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
        Schema::dropIfExists('user_skill_set_planeds');
    }
}
