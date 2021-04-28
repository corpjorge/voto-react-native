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
        if (auth()->user()->rol !== 1) { abort(403);  }
        return view('admin.eventos');
    }

    public function datos()
    {
        if (auth()->user()->rol !== 1) { abort(403);  }
        return EventoLista::orderBy('created_at', 'desc')->paginate(20);
    }

    public function inscritos($evento)
    {
        if (auth()->user()->rol !== 1) { abort(403);  }
        return Evento::where('evento', $evento)->paginate(20);
    }

    public function crear(Request $request)
    {
        if (auth()->user()->rol !== 1) { abort(403);  }
        $request->validate([ 'nombre' => 'required' ]);

        $evento = new EventoLista;
        $evento->nombre = $request->nombre;
        $evento->save();
    }


    public function eliminar($id)
    {
        if (auth()->user()->rol !== 1) { abort(403);  }
        EventoLista::find($id)->delete();
    }
}
