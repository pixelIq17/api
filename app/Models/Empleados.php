<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;

    protected $table = 'Tabla_Empleados';

    protected $fillable = ['DNI_empleado','Nombres_empleado','Apellidos_empleado','ID_cargo'];
}
