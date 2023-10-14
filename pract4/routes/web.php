<?php

use Illuminate\Support\Facades\Route;

/*
//Rutas tipo Peticion
Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('Formulario');
});
Route::get('/recu', function () {
    return view('Recuerdos');
});

//Vita
Route::view('/','welcome')-> name('apodoInicio');
Route::view('/form','Formulario')-> name('apodoFormulario');
Route::view('/recu','Recuerdos')-> name('apodoRecuerdos');
Route::view('/v1','vista1')-> name('apodoVista1');
*/
use App\Http\Controllers\diarioController;// instruccion que se necesita para hacer el controlador 
 
Route::get('/', [diarioController::class,'metodoInicio'])->name('apodoInicio');
Route::get('/form', [diarioController::class,'metodoFormulario'])->name('apodoFormulario');
Route::get('/recu', [diarioController::class,'metodoRecuerdos'])->name('apodoRecuedo');