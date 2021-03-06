<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Training extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('trainings', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('scors');
        $table->integer('topic_id')->unsigned();
        $table->integer('level_id')->unsigned();
        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade')->onDelete('cascade')->onUpdate('cascade')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade')->onUpdate('cascade')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade')->onUpdate('cascade');
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
          Schema::dropIfExists('trainings');
    }
}
