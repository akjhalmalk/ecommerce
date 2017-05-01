<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id',true);
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 10, 4);
            $table->text('photo_url');
            $table->boolean('availability');
            $table->tinyInteger('rate');
            $table->integer('no_of_units');
            $table->integer('buyer_id')->unsigned()->nullable();
            $table->foreign('buyer_id')->references('id')->on('users');
            $table->integer('seller_id')->unsigned()->nullable();
            $table->foreign('seller_id')->references('id')->on('users');
            $table->integer('auction_id')->unsigned()->nullable();
            $table->foreign('auction_id')->references('id')->on('auctions');
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('items');
    }
}
