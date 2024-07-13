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
        Schema::create('Tabla_Empleados', function (Blueprint $table) {
            $table->id();
            $table->string('DNI_empleado');
            $table->string('Nombres_empleado');
            $table->string('Apellidos_empleado');
            $table->string('ID_cargo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Tabla_Empleados');
    }
};
