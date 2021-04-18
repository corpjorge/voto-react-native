<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',     
        'celular',
        'correo',
        'tipo',
        'titulo',
        'descripcion',
        'archivo1',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'archivo1' => 'json',    
    ];
}
