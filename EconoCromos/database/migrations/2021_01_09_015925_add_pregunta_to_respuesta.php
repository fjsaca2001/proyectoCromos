<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPreguntaToRespuesta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('respuesta', function (Blueprint $table) {
            $table->unsignedInteger('idPregunta')->nullable();
            $table->foreign('idPregunta')->references('idPregunta')->on('pregunta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('respuesta', function (Blueprint $table) {
            $table->dropForeign(['idPregunta']);
            $table->dropColumn('idPregunta');
        });
    }
}
