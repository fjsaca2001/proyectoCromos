<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTemtaticaToAlbum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tematica', function (Blueprint $table) {
            $table->unsignedInteger('idAlbum')->default(1);
            $table->foreign('idAlbum')->references('idAlbum')->on('album')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tematica', function (Blueprint $table) {
            $table->dropForeign(['idAlbum']);
            $table->dropColumn('idAlbum');
        });
    }
}
