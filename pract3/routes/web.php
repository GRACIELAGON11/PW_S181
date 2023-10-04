<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
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
