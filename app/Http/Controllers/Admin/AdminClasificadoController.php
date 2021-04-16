<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminClasificadoController extends Controller
{
    public function vista()
    {
        return view('admin.clasificados');
    }
}
