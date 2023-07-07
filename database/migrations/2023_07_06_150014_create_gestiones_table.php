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
        Schema::create('gestiones', function (Blueprint $table) {
            $table->id();
            $table->string('clave');
            $table->string('seccion');
            $table->string('nombre');
            $table->string('a_paterno');
            $table->string('a_materno');
            $table->string('NumeroGestion',10);
            $table->text('solicitud');
            $table->date('fechasol');
            $table->string('respuesta')->nullable();
            $table->date('fecharespuesta')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('estatus',15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gestiones');
    }
};
