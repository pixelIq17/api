<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'Tabla_Ventas';

    protected $fillable = ['ID_auto', 'ID_empleado','ID_cliente','Fecha_venta','Total_venta'];
}
