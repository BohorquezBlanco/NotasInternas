<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Models\NotaInterna;


Route::get('/', [InicioController::class, 'inicio'])
    ->name('inicio');

Route::get('/contacto', [InicioController::class, 'contacto'])
    ->name('contacto');


Route::get('/notas', function () {
    $notas = NotaInterna::all();
    return view('notas.lista', compact('notas'));

});


Route::get('/notas/nueva', function () {
    return view('notas.formulario');
});


Route::post('/notas/nueva', function () {
    request()->validate([
        'titulo' => 'required',
        'prioridad' => 'required|integer',
    ], [
        'titulo.required' => 'El título de la nota es obligatorio.',
        'prioridad.required' => 'La prioridad es obligatoria.',
        'prioridad.integer' => 'La prioridad debe ser un número entero.',
    ]);
    NotaInterna::create([
        'titulo' => request()->input('titulo'),
        'prioridad' => request()->input('prioridad'),
    ]);
    return redirect('/notas');
});