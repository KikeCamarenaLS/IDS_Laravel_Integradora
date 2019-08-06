<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Historialsalud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historialsalud', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('Id_historialS')->index();
            $table->bigInteger('id_persona');
            $table->bigInteger('Peso');
            $table->bigInteger('Altura');
            $table->date('Fecha');
            $table->string('Enfermedad');
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
