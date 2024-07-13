<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'Tabla_Clientes';

    protected $fillable = ['Nombres_cliente','Apellidos_cliente'];
}
