<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

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

        if ($rol) {
            foreach ($rol as $key => $rolInt) {
                if ($rolInt['correo'] == $request->email && $rolInt['contrasenia'] == $request->password && $rolInt['rol'] == 1) {
                    return view('adminDashboard');
                } else if ($rolInt['correo'] == $request->email && $rolInt['contrasenia'] == $request->password && $rolInt['rol'] == 0) {
                    return view('personaDashboard');
                }
            }
        } else {
            return view('failLogin');
        }
    }
    public function registrarPersona(Request $request)
    {
        $persona = new Persona();

        $persona->nombre = $request->nombre;
        $persona->apellido_materno = $request->apellidoMaterno;
        $persona->apellido_paterno = $request->apellidoPaterno;
        $persona->domicilio = $request->domicilio;
        $persona->curp = $request->curp;
        $persona->fecha_nacimiento = $request->fechaNacimiento;
        $persona->sexo = $request->sexo;
        $persona->correo = $request->correo;
        $persona->contrasenia = $request->contrasenia;
        $persona->rol = 0;
        $persona->save();

        return view('personaDashboard');
    }
    public function tramites()
    {
        return view('historialTramites');
    }
    public function perfil()
    {
        return view('informacionPersonal');
    }
    public function administrarPersonas()
    {
        return view('administrarPersonas');
    }
}
