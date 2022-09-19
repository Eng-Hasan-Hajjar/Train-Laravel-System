<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seats', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('train_id')->unsigned();
             $table->foreign('train_id')->references('id')->on('trains')->onDelete('cascade');
             $table->integer('vehicle_num');
             $table->string('class');
             $table->integer('empty_seat');
             $table->integer('full_seat');
             $table->integer('all_seat');
             $table->float('price');
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
        Schema::dropIfExists('seats');
    }
}
