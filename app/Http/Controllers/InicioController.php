<?php

namespace App\Http\Controllers;

class InicioController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function contacto()
    {
        return view('contacto');
    }
}