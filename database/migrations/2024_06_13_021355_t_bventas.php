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
        Schema::create('Tabla_Ventas', function (Blueprint $table) {
            $table->id();
            $table->string('ID_auto');
            $table->string('ID_empleado');
            $table->string('ID_cliente');
            $table->string('Fecha_venta');
            $table->string('Total_venta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Tabla_Ventas');
    }
};
