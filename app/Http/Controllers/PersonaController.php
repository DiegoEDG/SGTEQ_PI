<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authLogin(Request $request)
    {
        $rol = Persona::select('correo', 'contrasenia', 'rol')
            ->where('correo', $request->email)
            ->where('contrasenia', $request->password)
            ->get();

        if ($rol == []) {
            return view('failLogin');
        } else {
            foreach ($rol as $key => $rolInt) {
                if ($rolInt['correo'] == $request->email && $rolInt['contrasenia'] == $request->password && $rolInt['rol'] == 1) {
                    return view('adminDashboard');
                } else if ($rolInt['correo'] == $request->email && $rolInt['contrasenia'] == $request->password && $rolInt['rol'] == 0) {
                    return view('personaDashboard');
                }
            }
        }
    }
}
