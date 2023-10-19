@extends('layouts.plantilla')
@section('titulo','Formulario')
@section('contenido')
    
    <h1 class="display-1 text-center text-black">Formulario</h1>
    <div class="container mt-5 col-md-6">
        <div class="card ">
            <div class="card-header fs-4 fw-medium text-primary text-center">
            Introduce aquí tus memorias:
            </div>
            <div class="card-body">
                <form method="POST" action="/guardarRe">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Titulo:</label>
                      <input type="text" name="textTitulo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Recuerdo:</label>
                      <input type="text" name="textRecuerdo" class="form-control" id="exampleInputPassword1">
                    </div>
                    
                    
            </div>
            <div class="card-footer text-body-secondary text-center">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="text">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    
    
@endsection
