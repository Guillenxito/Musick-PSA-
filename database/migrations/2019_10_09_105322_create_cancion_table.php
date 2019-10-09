<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancion', function (Blueprint $table) {
            $table->bigIncrements('id_cancion');
            $table->string('titulo');
            $table->unsignedBigInteger('id_disco');
            $table->unsignedBigInteger('id_autor');
            $table->unsignedBigInteger('id_estilo');
            $table->timestamps();
            $table->foreign('id_disco')->references('id_disco')->on('disco')->onDelete('cascade');
            $table->foreign('id_autor')->references('id_autor')->on('autor')->onDelete('cascade');
            $table->foreign('id_estilo')->references('id_estilo')->on('estilo')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cancion');
    }
}
