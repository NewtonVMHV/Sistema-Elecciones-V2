<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestiones extends Model
{
    use HasFactory;

    protected $fillable = [
        'clave',
        'seccion',
        'nombre',
        'a_paterno',
        'a_materno',
        'NumeroGestion',
        'solicitud',
        'fechasol',
        'respuesta',
        'fecharespuesta',
        'observaciones',
        'address',
        'latitude',
        'longitude',
        'estatus'
    ];
}
