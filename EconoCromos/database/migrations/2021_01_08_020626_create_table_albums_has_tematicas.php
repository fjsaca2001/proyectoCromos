<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAlbumsHasTematicas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums_has_tematicas', function (Blueprint $table) {
            $table->unsignedInteger('idTematica');
            $table->unsignedInteger('idAlbum')->nullable();
            $table->foreign('idTematica')->references('idTematica')->on('tematica');
            $table->foreign('idAlbum')->references('idAlbum')->on('album');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_albums_has_tematicas');
    }
}
