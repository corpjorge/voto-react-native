<?php

namespace App\Http\Controllers;
 
use App\Models\PqrsOficina;

class PqrsOficinaController extends Controller
{
    public function oficinas(PqrsOficina $pqrsOficina)
    {
        return $pqrsOficina->all();
    }
}
