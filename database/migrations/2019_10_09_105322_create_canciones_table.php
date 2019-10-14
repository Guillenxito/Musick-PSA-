<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canciones', function (Blueprint $table) {
            $table->bigIncrements('id_cancion');
            $table->string('titulo');
            $table->unsignedBigInteger('id_disco');
            $table->unsignedBigInteger('id_autor');
            $table->unsignedBigInteger('id_estilo');
            $table->timestamps();
            $table->foreign('id_disco')->references('id_disco')->on('discos')->onDelete('cascade');
            $table->foreign('id_autor')->references('id_autor')->on('autores')->onDelete('cascade');
            $table->foreign('id_estilo')->references('id_estilo')->on('estilos')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canciones');
    }
}
