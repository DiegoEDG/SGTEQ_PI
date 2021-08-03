<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\PersonaController;
use App\Models\Persona;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [PersonaController::class, 'login'])->name('login');

Route::get('/registrate', [PersonaController::class, 'resgistrarPersona'])->name('registrate');

Route::post('/authlogin', [PersonaController::class, 'authLogin'])->name('authLogin');

Route::get('/historialTramites', [PersonaController::class, 'tramites'])->name('historialTramites');

Route::get('/generarCita', [CitaController::class, 'generarCita'])->name('generarCita');

Route::get('/realizarTramite', [CitaController::class, 'realizarTramite'])->name('realizarTramite');
