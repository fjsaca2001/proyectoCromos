<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuariosC', function (Blueprint $table) {
            $table->increments('idUsuario');
            $table->string('nombre', 70);
            $table->string('nickname', 20)->unique();
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('pais', 50);
            $table->integer('edad');
            $table->string('password');
            $table->rememberToken();
            $table->integer('rol')->default(3);
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
        Schema::dropIfExists('usuariosC');
    }
}
