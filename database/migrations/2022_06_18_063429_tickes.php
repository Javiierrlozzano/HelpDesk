<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tickes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tickes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('IdTickes');
            $table->string('DescripcionProblema');
            $table->String('Estado');
            $table->String('NivelUrgencia');
            $table->bigInteger('Usuario')->unsigned();
            $table->timestamps();
            $table->bigInteger('idTecnicos_Tecnicos')->unsigned();
            $table->bigInteger('idEquipo_Equipo')->unsigned();
            $table->bigInteger('idMedios_Medios')->unsigned();
            $table->foreign('idTecnicos_Tecnicos')->references('IdTecnicos')->on('Tecnicos')->onDelete('cascade');
            $table->foreign('idEquipo_Equipo')->references('IdEquipos')->on('Equipos')->onDelete('cascade');
            $table->foreign('idMedios_Medios')->references('IdMedios')->on('Medios')->onDelete('cascade');
            $table->foreign('Usuario')->references('id')->on('users')->onDelete('cascade');
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
