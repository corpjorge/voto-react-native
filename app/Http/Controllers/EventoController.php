<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    public function vista()
    {
        return view('eventos');
    }

    public function crear(Request $request, Evento $evento)
    {

        $request->validate([
            'nombre' => 'required',
            'cedula' => 'required|numeric|min:0',
            'celular' => 'required|numeric|min:0',
            'correo' => 'required|email',
            'evento' => 'required',           
            'descripcion' => 'required',         
        ]);

        $evento->create($request->all());      
    }
    
}
