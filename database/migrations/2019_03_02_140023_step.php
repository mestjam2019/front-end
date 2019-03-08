<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Step extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('steps', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name')->nullable();
        $table->string('description')->nullable();
        $table->integer('number');
        $table->integer('topic_id')->unsigned();
        $table->integer('badge_id')->unsigned();
        $table->foreign('badge_id')->references('id')->on('badges')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('setps');
    }
}
