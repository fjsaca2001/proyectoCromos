<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDesbloqueado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desbloqueado', function (Blueprint $table) {
            $table->unsignedInteger('idAlbum');
            $table->unsignedInteger('idCromo');
            $table->unsignedInteger('idUsuario');
            $table->foreign('idAlbum')->references('idAlbum')->on('album');
            $table->foreign('idUsuario')->references('idUsuario')->on('usuariosC');
            $table->foreign('idCromo')->references('idCromo')->on('cromo');
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
        Schema::dropIfExists('desbloqueado');
    }
}
