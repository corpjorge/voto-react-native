<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clasificado; 

class AdminClasificadoController extends Controller
{
    public function vista()
    {
        $this->authorize('admin', User::class);
        return view('admin.clasificados');
    }

    public function datos()
    {
        $this->authorize('admin', User::class);
        return Clasificado::orderBy('created_at', 'desc')->paginate(20);
    }

    public function editar($id)
    {
        $this->authorize('admin', User::class);
        return Clasificado::find($id);
    }

    public function activar(Request $request, $id)
    {
        $this->authorize('admin', User::class); 
        $clasificado = Clasificado::find($id);      
        $clasificado->estado = $request->estado ? null : 'true';        
        $clasificado->save();
    }

    public function eliminar($id)
    {
        $this->authorize('admin', User::class);
        Clasificado::find($id)->delete();         
    }
} 