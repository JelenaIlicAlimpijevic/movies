<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Movies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('movies');
        Schema::create('movies', function (Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('genre');
            $table->string('director');
            $table->timestamps();
            $table->text('storyline');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
 