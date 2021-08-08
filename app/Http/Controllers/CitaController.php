<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function generarCita(Request $request)
    {
        $cita = new Cita();

        $cita->nombre = $request->motivo;
        $cita->fecha_cita = $request->fechaCita;
        $cita->lugar = $request->oficina;
        $cita->estatus = "pendiente";
        $cita->persona_id = 1;

        $cita->save();

        return redirect()->route('personaDashboard', 1);
    }
    public function validarCita()
    {
        return view('validarCita');
    }
}
