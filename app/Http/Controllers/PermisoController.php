<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermisoController extends Controller
{
    public function realizarTramite()
    {
        return view('realizarTramite');
    }
    public function validarTramites()
    {
        return view('validarTramites');
    }
}
