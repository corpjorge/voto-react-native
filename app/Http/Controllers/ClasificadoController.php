<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clasificado;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class ClasificadoController extends Controller
{
    public function vista()
    {
        return view('clasificados');
    }

    public function crear(Request $request, Clasificado $clasificado)
    {

        $request->validate([
            'nombre' => 'required',            
            'celular' => 'required|numeric|min:0',
            'correo' => 'required|email',            
            'tipo' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required',
            'archivo1' => 'required',           
        ]);

        $archivo1 = $request->file('archivo1')->getClientOriginalName();
        $archivo1 = \Str::random(3) . $archivo1;
        Storage::putFileAs('public/clasificados', new File($request->archivo1), $archivo1); 

        $clasificado->fill($request->all());
        $clasificado->archivo1 = $archivo1;
        $clasificado->save();
    }
}
