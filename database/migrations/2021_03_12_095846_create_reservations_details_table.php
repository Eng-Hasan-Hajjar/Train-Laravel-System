<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations_details', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('reservation_id')->unsigned();
             $table->foreign('reservation_id')->references('id')->on('reservations')->onDelete('cascade');
             $table->integer('ticket_randum_number');
             $table->integer('seat_sequence_number');


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
        Schema::dropIfExists('reservations_details');
    }
}
