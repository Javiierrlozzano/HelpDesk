<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SerialEquipo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Serial', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('IdSeriales');
            $table->string('Serial');
            $table->String('Estado');
            $table->bigInteger('idEquipo_Equipo')->unsigned();
            $table->foreign('idEquipo_Equipo')->references('IdEquipos')->on('Equipos')->onDelete('cascade');
       
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
