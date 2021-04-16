<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClasificadoTipo;

class ClasificadoTipoController extends Controller
{
    public function tipos(ClasificadoTipo $clasificadoTipo)
    {
        return $clasificadoTipo->all();
    }
}
