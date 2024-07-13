<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = 'Tabla_Cargos';

    protected $fillable = ['Nombre_cargo','Sueldo_cargo'];
}
