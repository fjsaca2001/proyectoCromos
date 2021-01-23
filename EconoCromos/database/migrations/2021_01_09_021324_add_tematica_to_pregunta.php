<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTematicaToPregunta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pregunta', function (Blueprint $table) {
            $table->unsignedInteger('idTematica')->nullable();
            $table->foreign('idTematica')->references('idTematica')->on('tematica')->onDelete('cascade');;
            $table->unsignedInteger('idActividad')->nullable();
            $table->foreign('idActividad')->references('idActividad')->on('actividad')->onDelete('cascade');;
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pregunta', function (Blueprint $table) {
            $table->dropForeign(['idTematica']);
            $table->dropColumn('idTematica');
            $table->dropForeign(['idActividad']);
            $table->dropColumn('idActividad');
        });
    }
}
