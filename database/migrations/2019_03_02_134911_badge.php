<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Badge extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('badges', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name')->nullable();
        $table->string('image')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *case
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('badges');
    }
}
