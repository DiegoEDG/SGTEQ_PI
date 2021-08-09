<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\Permiso;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    public function realizarTramite($personaId)
    {
        $autoId = Auto::select('id')
            ->where('persona_id', $personaId)
            ->get();

        $personaId = $personaId;

        return view('realizarTramite', compact('personaId', 'autoId'));
    }

    public function guardarPermiso(Request $request, $autoId, $personaId)
    {
        $permiso = new Permiso();

        $permiso->justificacion = $request->justificacion;
        $permiso->estatus = "pendiente";
        $permiso->auto_id = $autoId;
        $permiso->save();

        dump($autoId);
        dump($personaId);

        return route('personaDashboard', compact('personaId'));
    }

    public function validarTramites()
    {
        return view('validarTramites');
    }
}
