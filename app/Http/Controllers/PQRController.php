<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PQR;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class PQRController extends Controller
{
    public function vista()
    {
        return view('pqrs');
    }

    public function crear(Request $request, PQR $pqr)
    {
 
        $request->validate([
            'nombre' => 'required',
            'cedula' => 'required|numeric|min:1',
            'celular' => 'required|numeric|min:0',
            'correo' => 'required|email',
            'oficinas' => 'required',
            'tipo' => 'required',
            'descripcion' => 'required',
            'archivo1' => 'required',
            'archivo2' => 'required',
        ]); 
 
        $archivo1 = $request->file('archivo1')->getClientOriginalName();
        $archivo1 = \Str::random(3).$archivo1;

        $archivo2 = $request->file('archivo2')->getClientOriginalName();
        $archivo2 = \Str::random(3) . $archivo2;

        Storage::putFileAs('public/document', new File($request->archivo1), $archivo1);
        Storage::putFileAs('public/document', new File($request->archivo2), $archivo2); 

        $pqr->fill($request->all());
        $pqr->archivo1 = $archivo1;
        $pqr->archivo2 = $archivo2;
        $pqr->save();

    }
}
