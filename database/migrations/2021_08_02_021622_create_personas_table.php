<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('apellido_paterno', 50);
            $table->string('apellido_materno', 50);
            $table->string('domicilio', 50)->nullable();
            $table->string('curp', 30)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('sexo', 15)->nullable();
            $table->string('estado', 30)->nullable();
            $table->string('municipio', 50)->nullable();
            $table->integer('codigo_postal')->nullable();
            $table->string('correo', 50);
            $table->string('contrasenia', 50);
            $table->integer('rol');
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
        Schema::dropIfExists('personas');
    }
}
