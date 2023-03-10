<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso', function (Blueprint $table) {
            $table->id();
            $table->integer('cedula');
            $table->date('fecha_solicitud');
            $table->string('nombre');
            $table->string('ubicacion');
            $table->integer('nomina');
            $table->string('vicepresidencia');
            $table->string('gerencia');
            $table->string('departamento');
            $table->string('motivo');
            $table->string('supervisor');
            $table->date('tiempo_inicio');
            $table->date('tiempo_fin');
            $table->integer('total_dias');
            $table->integer('total_horas');
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
        Schema::dropIfExists('permiso');
    }
};
