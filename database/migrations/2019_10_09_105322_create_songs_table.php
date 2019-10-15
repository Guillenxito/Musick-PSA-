<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->bigIncrements('id_song');
            $table->string('titulo');
            $table->unsignedBigInteger('id_album');
            $table->unsignedBigInteger('id_author');
            $table->unsignedBigInteger('id_style');
            $table->timestamps();
            $table->foreign('id_album')->references('id_album')->on('albums')->onDelete('cascade');
            $table->foreign('id_author')->references('id_author')->on('authors')->onDelete('cascade');
            $table->foreign('id_style')->references('id_style')->on('styles')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
