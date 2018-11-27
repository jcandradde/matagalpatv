<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('edad');
            $table->string('p_nombre',25);
            $table->string('s_nombre',25)->nullable();
            $table->string('p_apellido',25);
            $table->string('s_apellido',25)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('cedula',25)->unique()->nullable();
            $table->string('telefono',20);
            $table->string('correo_e',255);
            $table->char('sexo',1);
            $table->string('num_inss',45)->unique();
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
        Schema::dropIfExists('empleado');
    }
}
