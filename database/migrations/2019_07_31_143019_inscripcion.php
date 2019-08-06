<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Inscripcion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_inscripcion')->index();
            $table->bigInteger('id_persona');
            $table->bigInteger('id_paquete');
            $table->string('Estatus');
            $table->date('Fecha_inscripcion');
            $table->date('Fecha_Pago');
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
