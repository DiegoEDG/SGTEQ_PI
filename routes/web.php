<?php

use App\Http\Controllers\AutoController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\PersonaController;
use App\Models\Persona;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/registrate', function () {
    return view('registrate');
});
Route::get('/agendarCita', function () {
    return view('generarCita');
});


Route::get('/login', [PersonaController::class, 'login'])->name('login');

Route::post('/authlogin', [PersonaController::class, 'authLogin'])->name('authLogin');

Route::post('/registrarPersona', [PersonaController::class, 'registrarPersona'])->name('registrarPersona');

Route::get('/realizarTramite', [PermisoController::class, 'realizarTramite'])->name('realizarTramite');

Route::get('/generarCita', [CitaController::class, 'generarCita'])->name('generarCita');

Route::get('/historialTramites', [PersonaController::class, 'tramites'])->name('historialTramites');

Route::get('/informacionPersonal', [PersonaController::class, 'perfil'])->name('informacionPersonal');

Route::get('/validarTramites', [PermisoController::class, 'validarTramites'])->name('validarTramites');

Route::get('/validarCita', [CitaController::class, 'validarCita'])->name('validarCita');

Route::get('/administrarPersonas', [PersonaController::class, 'administrarPersonas'])->name('administrarPersonas');

Route::get('/registrarAuto', [AutoController::class, 'registrarAuto'])->name('registrarAuto');

Route::delete('/administrarPersonas/eliminarPersona/{id}', [PersonaController::class, 'eliminarPersona'])->name('eliminarPersona');
