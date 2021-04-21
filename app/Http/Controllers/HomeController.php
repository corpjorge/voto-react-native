<?php

namespace App\Http\Controllers;
 

class HomeController extends Controller
{
   
    public function home()
    {
        return view('welcome');
    }

    public function redirecionar()
    {
        return redirect('/login');
    }

    public function ingreso()
    {
        if (auth()->user()->rol == 1) {
            return redirect('/admin/pqrs');
        }

        return redirect('/actualizacion');
    }
}
