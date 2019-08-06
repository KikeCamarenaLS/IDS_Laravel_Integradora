<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Persona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('Id_persona')->index();
            $table->string('Nombre');
            $table->string('A_paterno');
            $table->string('A_materno');
            $table->string('Direccion');
            $table->string('Correo');
            $table->bigInteger('Telefono');
            $table->string('Contrasena');
            $table->string('TipoUsuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
