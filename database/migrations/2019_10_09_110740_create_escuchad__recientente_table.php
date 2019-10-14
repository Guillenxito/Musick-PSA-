<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscuchadReciententeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuchado_recientemente', function (Blueprint $table) {
            $table->bigIncrements('id_escucha');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_cancion');
            $table->timestamps();

            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_cancion')->references('id_cancion')->on('canciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escuchado_recientemente');
    }
}
