<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTematicaToActividad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actividad', function (Blueprint $table) {
            $table->unsignedInteger('idTematica')->nullable();
            $table->foreign('idTematica')->references('idTematica')->on('tematica');
            // $table->unsignedInteger('idPregunta')->nullable();
            // $table->foreign('idPregunta')->references('idPregunta')->on('pregunta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actividad', function (Blueprint $table) {
            $table->dropForeign(['idTematica']);
            $table->dropColumn('idTematica');
        });
    }
}
