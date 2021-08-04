<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function generarCita()
    {
        return view('generarCita');
    }
    public function validarCita()
    {
        return view('validarCita');
    }
}
