<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PQR extends Model
{
    use HasFactory;

    protected $table = 'pqrs';

    protected $fillable = [
        'nombre', 
        'cedula', 
        'celular', 
        'correo', 
        'oficinas', 
        'tipo', 
        'descripcion', 
        'archivo1', 
        'archivo2', 
        'estado', 
        'fecha_atendido', 
        'fecha_cierre', 
        'archivo_antendido', 
        'archivo_cierre', 
        'observacion',
    ];
}
