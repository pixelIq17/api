<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;

    protected $table = 'Tabla_Autos';

    protected $fillable = ['Numero_placa','ID_modelo','ID_marca','Precio_auto'];
}
