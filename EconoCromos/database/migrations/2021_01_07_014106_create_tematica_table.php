<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTematicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tematica', function (Blueprint $table) {
            $table->increments('idTematica');
            $table->string('nombreTematica', 25)->require()->unique();
            $table->string('descripcion', 500)->require();
            $table->string('imgTematica');
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
        Schema::dropIfExists('tematica');
    }
}
