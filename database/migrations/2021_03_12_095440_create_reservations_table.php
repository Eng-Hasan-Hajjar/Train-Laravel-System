<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('user_id')->unsigned();
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             $table->bigInteger('national_number');
             $table->integer('seat_id')->unsigned();
             $table->foreign('seat_id')->references('id')->on('seats')->onDelete('cascade');
             $table->dateTime('reservation_time');
             $table->dateTime('travell_time');
             $table->integer('num_of_ticket');

             $table->integer('station_from');
             $table->integer('station_to');
             $table->string('email');
             $table->bigInteger('phone');
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
        Schema::dropIfExists('reservations');
    }
}
