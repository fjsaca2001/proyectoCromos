<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAlbumToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuariosC', function (Blueprint $table) {
            $table->unsignedInteger('idAlbum');
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
        Schema::table('usuariosC', function (Blueprint $table) {
            $table->dropForeign(['idAlbum']);
            $table->dropColumn('idAlbum');
        });
    }
}
