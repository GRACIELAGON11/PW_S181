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
use App\Http\Controllers\Registro;// instruccion que se necesita para hacer el controlador 
 Route::controller(Registro::class)->group(function(){
    Route::get('/','metodoInicio')->name('apodoInicio');
    Route::get('/libros', 'metodolibros')->name('apodolibros');
    Route::post('/guardarli','guardarlibro')->name('apodoguardarli');
});



/* Route::get('/', function () {
    return view('welcome');
});
Route::get('/libros', function () {
    return view('libros');
}); */
