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
        $rol = Persona::select('id', 'correo', 'contrasenia', 'rol')
            ->where('correo', $request->email)
            ->where('contrasenia', $request->password)
            ->get();

        if ($rol) {
            foreach ($rol as $key => $rolInt) {
                if ($rolInt['correo'] == $request->email && $rolInt['contrasenia'] == $request->password && $rolInt['rol'] == 1) {
                    $personaId = $rolInt['id'];
                    return view('adminDashboard', compact('personaId'));
                } else if ($rolInt['correo'] == $request->email && $rolInt['contrasenia'] == $request->password && $rolInt['rol'] == 0) {
                    $personaId = $rolInt['id'];
                    return view('personaDashboard', compact('personaId'));
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
        $persona->codigo_postal = $request->codigoPostal;
        $persona->curp = $request->curp;
        $persona->fecha_nacimiento = $request->fechaNacimiento;
        $persona->sexo = $request->sexo;
        $persona->correo = $request->correo;
        $persona->contrasenia = $request->contrasenia;
        $persona->rol = 0;
        $persona->save();

        $personaId = Persona::select('id')
            ->where('curp', $request->curp)
            ->get();

        return view('personaDashboard', compact('personaId'));
    }

    public function personaDashboard()
    {
        return view('personaDashboard');
    }

    public function adminDashboard()
    {
        return view('adminDashboard');
    }

    public function tramites()
    {
        return view('historialTramites');
    }
    public function perfil($id)
    {
        $persona = Persona::find($id);

        return view('informacionPersonal', compact('persona'));
    }

    public function editarInfo(Request $request, $id)
    {
        $persona = Persona::find($id);
        $persona->nombre = $request->nombre;
        $persona->apellido_materno = $request->apellidoMaterno;
        $persona->apellido_paterno = $request->apellidoPaterno;
        $persona->domicilio = $request->domicilio;
        $persona->codigo_postal = $request->codigoPostal;
        $persona->curp = $request->curp;
        $persona->fecha_nacimiento = $request->fechaNacimiento;
        $persona->sexo = $request->sexo;
        $persona->correo = $request->correo;
        $persona->contrasenia = $request->contrasenia;
        $persona->rol = 0;
        $persona->save();

        $personaId = Persona::select('id')
            ->where('id', $persona->id)
            ->get();

        return view('informacionPersonal', compact('persona'));
    }

    public function administrarPersonas()
    {
        $personas = Persona::all();

        return view('administrarPersonas', compact('personas'));
    }
    public function eliminarPersona($id)
    {
        $persona = Persona::select('id')
            ->where('id', $id)
            ->first();

        $persona->delete();

        return redirect()->route('administrarPersonas');
    }
}
