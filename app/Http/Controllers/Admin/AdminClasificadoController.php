<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clasificado;

class AdminClasificadoController extends Controller
{
    public function vista()
    {
        if (auth()->user()->rol !== 1) { abort(403);  }
        return view('admin.clasificados');
    }

    public function datos()
    {
        if (auth()->user()->rol !== 1) { abort(403);  }
        return Clasificado::orderBy('created_at', 'desc')->paginate(20);
    }

    public function editar($id)
    {
        if (auth()->user()->rol !== 1) { abort(403);  }
        return Clasificado::find($id);
    }

    public function activar(Request $request, $id)
    {
        if (auth()->user()->rol !== 1) { abort(403);  }
        $clasificado = Clasificado::find($id);
        $clasificado->estado = $request->estado ? null : 'true';
        $clasificado->save();
    }

    public function eliminar($id)
    {
        if (auth()->user()->rol !== 1) { abort(403);  }
        Clasificado::find($id)->delete();
    }
}
