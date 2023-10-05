@extends('layouts.plantilla')
@section('titulo','login')
@section('contenido')

    <form>
        <h1 class="text-center">LOGIN</h1>
        <div class="card center" style="width: 30rem; ">
            <div class="mb-3 py-3">
            <label for="exampleInputEmail1" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el usuario">
            </div>
            <div class="mb-3 py-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese la contraseña">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </form>
    
@endsection