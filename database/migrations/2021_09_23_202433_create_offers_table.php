<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('train_id')->unsigned();
            $table->foreign('train_id')->references('id')->on('trains')->onDelete('cascade');
            $table->integer('station_id_from')->unsigned();
            $table->foreign('station_id_from')->references('id')->on('stations')->onDelete('cascade');

            $table->integer('station_id_to')->unsigned();
            $table->foreign('station_id_to')->references('id')->on('stations')->onDelete('cascade');

            $table->dateTime('arrival_time');
            $table->dateTime('leave_time');
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
        Schema::dropIfExists('offers');
    }
}
