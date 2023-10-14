<?php

namespace App\Http\Controllers;// lugar de trabajo que se

use Illuminate\Http\Request; //importacion de recuest

class diarioController extends Controller//crear las funciones
{
    public function metodoInicio(){
        return view('welcome');

    }
    public function metodoFormulario(){
        return view('Formuario');
    }
    public function metodoRecuerdos(){
        return view('Recuerdos');
    }
}
