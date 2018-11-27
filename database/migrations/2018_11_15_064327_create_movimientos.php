<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_inicio');
            $table->unsignedInteger('idequipo');
            $table->foreign('idequipo')->references('id')->on('equipos');
            $table->unsignedInteger('idempleado');
            $table->foreign('idempleado')->references('id')->on('empleado');
            $table->date('fecha_devolucion')->nullable();
            $table->string('detalles_entrega',200)->nullable();
            $table->boolean('disponible');
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
        Schema::dropIfExists('movimientos');
    }
}
