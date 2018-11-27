<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('modelo',45)->nullable();
            $table->string('numero_serie',45)->nullable();
            $table->string('estado_fisico',25);
            $table->integer('idmarca')->unsigned();
            $table->foreign('idmarca')->references('id')->on('marca');
            $table->unsignedInteger('idcategoria');
            $table->foreign('idcategoria')->references('id')->on('categoria');
            $table->unsignedInteger('idubicacion');
            $table->foreign('idubicacion')->references('id')->on('ubicacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
