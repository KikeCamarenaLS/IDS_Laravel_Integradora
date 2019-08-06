<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rutina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutina', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_rutina')->index();
            $table->string('Nombre_Rutina');
            $table->string('Descripcion');
            $table->bigInteger('Serie');
            $table->bigInteger('Repeticiones');
            $table->string('Imagen');
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
