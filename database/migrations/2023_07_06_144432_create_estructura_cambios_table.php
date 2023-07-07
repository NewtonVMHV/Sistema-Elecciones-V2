<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estructura_cambios', function (Blueprint $table) {
            $table->id();
            $table->string('clave',10);
            $table->string('seccion');
            $table->string('nombre');
            $table->string('a_paterno');
            $table->string('a_materno');
            $table->string('direccion');
            $table->string('colonia');
            $table->string('codigo_postal',5);
            $table->string('curp',18);
            $table->string('clave_elector',18);
            $table->date('f_nacimiento');
            $table->string('tipo');
            $table->string('correo')->nullable();
            $table->string('facebook')->nullable();
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            $table->string('sexo');
            $table->string('estructuras');
            $table->string('genero')->nullable();
            $table->string('estatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estructura_cambios');
    }
};
