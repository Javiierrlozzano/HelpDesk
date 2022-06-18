<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Equipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Equipos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('IdEquipos');
            $table->string('Serial');
            $table->string('IpAddress');
            $table->string('Nombre');
            $table->string('Marca');
            $table->string('Modelo');
            $table->bigInteger('Areas_IdAreas')->unsigned();
            $table->bigInteger('Sede_IdSede')->unsigned();
            $table->bigInteger('Tipo_IdTipo')->unsigned();
            $table->foreign('Sede_IdSede')->references('IdSede')->on('Sedes')->onDelete('cascade');
            $table->foreign('Areas_IdAreas')->references('IdAreas')->on('Areas')->onDelete('cascade');
            $table->foreign('Tipo_IdTipo')->references('IdTipo')->on('TipoEquipo')->onDelete('cascade');
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
