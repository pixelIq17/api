<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    protected $table = 'Tabla_Modelos';

    protected $fillable = ['Nombre_modelo', 'ID_marca'];
}
