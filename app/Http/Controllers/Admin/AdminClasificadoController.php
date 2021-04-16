<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clasificado; 

class AdminClasificadoController extends Controller
{
    public function vista()
    {
        return view('admin.clasificados');
    }

    public function datos()
    {
        return Clasificado::orderBy('created_at', 'desc')->paginate(20);
    }

    public function editar($id)
    {
        return Clasificado::find($id);
    }

    public function activar(Request $request, $id)
    {   
        $clasificado = Clasificado::find($id);      
        $clasificado->estado = $request->estado ? null : 'true';        
        $clasificado->save();
    }

    public function eliminar($id)
    {
        Clasificado::find($id)->delete();         
    }
} 