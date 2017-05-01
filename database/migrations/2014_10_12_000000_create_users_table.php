<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname',30);
            $table->string('lastname',30);
            $table->string('email')->unique();
            $table->string('password');
            $table->date('birthday');
            $table->text('address');
            $table->integer('phone');
//             1 : male  0 : female
            $table->boolean('gender');
            $table->text('photo_url');
            $table->string('type', 20);
            $table->tinyInteger('rate');
            $table->boolean('verified');
            $table->boolean('confirmed');
            $table->text('token');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
