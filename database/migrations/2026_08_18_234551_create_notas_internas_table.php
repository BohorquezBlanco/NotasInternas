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
        Schema::create('notas_internas', function (Blueprint $table) {

            $table->id();

            // Datos de la nota interna
            $table->string('codigo')->unique();
            $table->string('referencia')->nullable();
            $table->string('caso');

            // Información de la nota
            $table->string('titulo');
            $table->integer('prioridad');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas_internas');
    }
};