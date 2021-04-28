<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;

class MunicipioController extends Controller
{
    public function lista($id)
    {
        return Municipio::where('departamento_id',$id)->get();
    }
}
