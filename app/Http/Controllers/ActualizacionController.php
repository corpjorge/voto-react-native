<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actualizacion;

class ActualizacionController extends Controller
{
    public function vista()
    {
        $actualizacion = Actualizacion::where('user_id',auth()->user()->id)->exists();

        if(!$actualizacion){
            $nuevo = new Actualizacion;
            $nuevo->user_id = auth()->user()->id;
            $nuevo->save();            
        }  

        return view('actualizacion');
    }

    public function guardarDatos(Request $request)
    {
        $actualizacion = Actualizacion::where('user_id', auth()->user()->id)->first();
        $actualizacion->update($request->all());
    }

    public function datos()
    {
        return Actualizacion::where('user_id', auth()->user()->id)->first();       
    }
}
