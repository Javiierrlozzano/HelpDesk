<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Area extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Areas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('IdAreas');
            $table->string('NombreArea');
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
