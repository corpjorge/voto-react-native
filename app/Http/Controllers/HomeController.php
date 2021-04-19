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

    public function redirecionarPqrs()
    {
        return redirect('/admin/pqrs');
    }
}
