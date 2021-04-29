<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;

class MunicipioController extends Controller
{
    public function lista($id)
    {
        return Municipio::where('code_dep_id',$id)->get();
    }
}
