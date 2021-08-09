<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function generarCita($id)
    {
        $personaId = $id;

        return view('generarCita', compact('personaId'));
    }

    public function guardarCita(Request $request, $id)
    {
        $cita = new Cita();

        $cita->nombre = $request->motivo;
        $cita->fecha_cita = $request->fechaCita;
        $cita->lugar = $request->oficina;
        $cita->estatus = "pendiente";
        $cita->persona_id = $id;
        $cita->save();

        $personaId = $id;

        return view('personaDashboard', compact('personaId'));
    }

    public function validarCita()
    {
        $citas = Cita::all();

        return view('validarCita', compact('citas'));
    }

    public function eliminarCita($id)
    {
        $cita = Cita::find($id);
        $cita->delete();

        return redirect()->route('validarCita');
    }
}
