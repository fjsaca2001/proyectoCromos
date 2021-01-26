<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCromo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cromo', function (Blueprint $table) {
            $table->increments('idCromo');
            $table->string('nombre', 30);
            $table->string('descripcion', 400);
            $table->string('imgURL');
            $table->unsignedInteger('idTematica');
            $table->unsignedInteger('idActividad');
            $table->foreign('idTematica')->references('idTematica')->on('tematica')->onDelete('cascade');
            $table->foreign('idActividad')->references('idActividad')->on('actividad')->onDelete('cascade');
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
        Schema::dropIfExists('cromo');
    }
}
