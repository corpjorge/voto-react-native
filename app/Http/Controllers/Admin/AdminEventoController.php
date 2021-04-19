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
        $this->authorize('admin', User::class);
        return view('admin.eventos');
    }

    public function datos()
    {
        $this->authorize('admin', User::class);
        return EventoLista::orderBy('created_at', 'desc')->paginate(20);
    }

    public function inscritos($evento)
    {
        $this->authorize('admin', User::class);     
        return Evento::where('evento', $evento)->paginate(20);
    }

    public function crear(Request $request)
    {
        $this->authorize('admin', User::class);
        $request->validate([ 'nombre' => 'required' ]);

        $evento = new EventoLista;            
        $evento->nombre = $request->nombre;
        $evento->save();
    }


    public function eliminar($id)
    {
        $this->authorize('admin', User::class);
        EventoLista::find($id)->delete(); 
    }
}
