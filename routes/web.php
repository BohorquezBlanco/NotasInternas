<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Models\NotaInterna;


Route::get('/', [InicioController::class, 'inicio'])
    ->name('inicio');


Route::get('/contacto', [InicioController::class, 'contacto'])
    ->name('contacto');


// LISTA DE NOTAS

Route::get('/notas', function () {

    $notas = NotaInterna::all();

    return view('notas.lista', compact('notas'));

});


// FORMULARIO

Route::get('/notas/nueva', function () {

    return view('notas.formulario');

});


// GUARDAR NOTA

Route::post('/notas/nueva', function () {

    request()->validate([

        'codigo' => 'required',

        'referencia' => 'nullable',

        'caso' => 'required',

        'titulo' => 'required',

        'prioridad' => 'required|integer',

        'stock' => 'required|integer|min:0',
    ], [

        'codigo.required' => 'El código de la nota es obligatorio.',

        'caso.required' => 'Debe seleccionar un caso.',

        'titulo.required' => 'El título de la nota es obligatorio.',

        'prioridad.required' => 'La prioridad es obligatoria.',

        'prioridad.integer' => 'La prioridad debe ser un número entero.',

        'stock.integer' => 'El stock debe ser un número entero.',

        'stock.min' => 'El stock no puede ser negativo.',

    ]);


    NotaInterna::create([

        'codigo' => request()->input('codigo'),

        'referencia' => request()->input('referencia'),

        'caso' => request()->input('caso'),

        'titulo' => request()->input('titulo'),

        'prioridad' => request()->input('prioridad'),
        
        'stock' => request()->input('stock'),
    ]);


    return redirect('/notas');

});