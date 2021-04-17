<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\EventoLista;  

class AdminEventoController extends Controller
{
    public function vista()
    {
        return view('admin.eventos');
    }

    public function datos()
    {    
        return EventoLista::orderBy('created_at', 'desc')->paginate(20);
    }

    public function inscritos($evento)
    {       
        return Evento::where('evento', $evento)->paginate(20);
    }

    public function crear(Request $request)
    {
        $request->validate([ 'nombre' => 'required' ]);

        $evento = new EventoLista;            
        $evento->nombre = $request->nombre;
        $evento->save();
    }


    public function eliminar($id)
    {
        EventoLista::find($id)->delete(); 
    }
}
