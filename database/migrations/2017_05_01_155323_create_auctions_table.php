<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('state',25);
            $table->decimal('starting_price',10,4);
            $table->integer('creator_id')->unsigned()->nullable();
            $table->foreign('creator_id')->references('id')->on('users');
            $table->integer('winner_id')->unsigned()->nullable();
            $table->foreign('winner_id')->references('id')->on('users');
            $table->decimal('buy_now_price',10,4);
            $table->decimal('hammer_price',10,4);
            $table->decimal('target_price',10,4);
            $table->dateTime('end_time');
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
        Schema::dropIfExists('auctions');
    }
}
