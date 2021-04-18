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

        if ($request->file('archivo2')) {
            $archivo2 = $request->file('archivo2')->getClientOriginalName();
            $archivo2 = \Str::random(3) . $archivo2;
            Storage::putFileAs('public/clasificados', new File($request->archivo2), $archivo2);
        }

        if ($request->file('archivo3')) {
            $archivo3 = $request->file('archivo3')->getClientOriginalName();
            $archivo3 = \Str::random(3) . $archivo3;
            Storage::putFileAs('public/clasificados', new File($request->archivo3), $archivo3);
        }


        if ($request->file('archivo4')) {
            $archivo4 = $request->file('archivo4')->getClientOriginalName();
            $archivo4 = \Str::random(3) . $archivo4;
            Storage::putFileAs('public/clasificados', new File($request->archivo4), $archivo4);
        } 

        $fotos =array(
            "archivo1"    => isset($archivo1) ? $archivo1 : null,
            "archivo2"    => isset($archivo2) ? $archivo2 : null,
            "archivo3"    => isset($archivo3) ? $archivo3 : null,
            "archivo4"    => isset($archivo4) ? $archivo4 : null,           
        );

        $clasificado->fill($request->all());
        $clasificado->archivo1 = $fotos;
        $clasificado->save();
    }
}
