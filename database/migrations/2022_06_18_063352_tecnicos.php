<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tecnicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tecnicos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('IdTecnicos');
            $table->string('TipoDoc');
            $table->string('Doc');
            $table->string('Nombre');
            $table->string('Estado');
            $table->bigInteger('Sede_IdSede')->unsigned();
            $table->foreign('Sede_IdSede')->references('IdSede')->on('Sedes')->onDelete('cascade');
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
