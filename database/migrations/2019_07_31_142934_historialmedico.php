<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Historialmedico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historialmedico', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('Id_historialM')->index();
            $table->bigInteger('id_historialS');
            $table->string('NombreEnfermedad',120);
            $table->string('Descripcion',250);
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
