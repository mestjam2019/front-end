<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Booking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('bookings', function (Blueprint $table) {
        $table->increments('id');
        $table->date('date_booking');
        $table->time('time');
        $table->boolean('statut');
        $table->integer('user_id')->unsigned();
        $table->integer('specialiste_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('specialiste_id')->references('id')->on('specialistes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('bookings');
    }
}
