<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estructura_cambio extends Model
{
    use HasFactory;

    protected $fillable = [
        'clave',
        'seccion',
        'nombre',
        'a_paterno',
        'a_materno',
        'direccion',
        'colonia',
        'codigo_postal',
        'curp',
        'clave_elector',
        'f_nacimiento',
        'tipo',
        'foto',
        'correo',
        'telefono',
        'facebook',
        'celular',
        'sexo',
        'estructuras',
        'genero',
        'estatus'
    ];
}
