<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddArtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add__arts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('cartegory');
            $table->string('sub_cartegory');
            $table->string('description');
            $table->integer('price');
            $table->string('images');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add__arts');
    }
}
