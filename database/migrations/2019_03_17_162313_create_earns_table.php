<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEarnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('earns', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('car')->unsigned();
             $table->integer('tour_earn');
             $table->integer('commission')->length(11);
             $table->integer('amount');
             $table->string('location');
             $table->string('date');
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
        Schema::dropIfExists('earns');
    }
}
