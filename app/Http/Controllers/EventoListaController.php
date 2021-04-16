<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventoLista;

class EventoListaController extends Controller
{
    public function lista(EventoLista $eventoListas)
    {
        return $eventoListas->all();
    }
}
