<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PQR;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Carbon\Carbon;

class AdminPqrController extends Controller
{ 
    public function vista()
    {
        $this->authorize('admin', User::class);        
        return view('admin.pqrs');
    }

    public function datos()
    {
        $this->authorize('admin', User::class);
        return PQR::orderBy('created_at', 'desc')->paginate(20);
    }

    public function editar($id)
    {
        $this->authorize('admin', User::class);
        return PQR::find($id);
    }

    public function atender(Request $request, $id)
    {
        $this->authorize('admin', User::class);
        $request->validate([
            'observacion_antendido' => 'required',           
            'archivo_antendido' => 'required',          
        ]); 

        $archivo1 = $request->file('archivo_antendido')->getClientOriginalName();
        $archivo1 = \Str::random(3) . $archivo1;
        Storage::putFileAs('public/pqrs/respuestas', new File($request->archivo_antendido), $archivo1);
      
        $pqrs = PQR::find($id);
        $pqrs->observacion_antendido = $request->observacion_antendido;
        $pqrs->archivo_antendido = $archivo1;
        $pqrs->estado = 'ATENDIDO';
        $pqrs->fecha_atendido = Carbon::now();
        $pqrs->save();
    }

    public function cerrar(Request $request, $id)
    {
        $this->authorize('admin', User::class);
        $request->validate([
            'observacion_cierre' => 'required',
            'archivo_cierre' => 'required',          
        ]); 

        $archivo1 = $request->file('archivo_cierre')->getClientOriginalName();
        $archivo1 = \Str::random(3) . $archivo1;
        Storage::putFileAs('public/pqrs/respuestas', new File($request->archivo_cierre), $archivo1);
      
        $pqrs = PQR::find($id);
        $pqrs->observacion_cierre = $request->observacion_cierre;
        $pqrs->archivo_cierre = $archivo1;
        $pqrs->estado = 'CERRADO';
        $pqrs->fecha_cierre = Carbon::now();
        $pqrs->save();
    }

}
