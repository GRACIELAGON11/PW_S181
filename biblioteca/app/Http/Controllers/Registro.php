<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormRequest;
use RealRashid\SweetAlert\Facades\Alert;

class Registro extends Controller
{
    public function metodoInicio(){
        return view('welcome');

    }
    public function metodolibros(){
        return view('libros');
    }
    public function guardarlibro(validadorFormRequest $req)
    {

        /* echo"<p>";
            echo $req->ip();
            echo" - ";
            echo $req->path();
            echo" - ";
            echo $req->method();
            echo" - ";
            echo $req->input('ISBN');
            echo" - ";
            echo $req->input('Titulo');
            echo" - ";
            echo $req->input('Autor');
            echo" - ";
            echo $req->input('Paginas');
            echo" - ";
            echo $req->input('Editorial');
            echo" - ";
            echo $req->input('Correo');
            echo" - ";
            echo $req->url();
        echo"</p>";
     */
        return redirect('/libros')->with('confirmacion', 'Todo correcto:'. $req->input('Titulo'));
    }
       
}
