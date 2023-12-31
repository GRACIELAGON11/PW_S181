@extends('layouts.plantilla')
@section('titulo','form')
@section('contenido')

    <h1 class="display-1 text-center text-black">FORMULARIO</h1>

  <div class="container mt-5 col-md-6">
    @if(session()->has('confirmacion'))

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>{{session('confirmacion')}}</strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>

    @endif

    @if($errors->any())
      @foreach ($errors->all() as $error)

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{$error}}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endforeach
    @endif

    <div class="card ">
      <div class="card-header fs-4 fw-medium text-primary text-center">
        Introduce aquí tus memorias:
      </div>
      <div class="card-body">
        <form method="POST" action="/guardarRe">

        @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titulo:</label>
            <input type="text" name="txtTitulo"class="form-control" value="{{old('txtTitulo')}}" >
            <p class="text-danger fst-italic fw-semibold">{{$errors->first('txtTitulo')}} </p>

          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Recuerdo:</label>
            <input type="text" name="txtRecuerdo"class="form-control" value="{{old('txtRecuerdo')}}"  id="exampleInputPassword1">
            {{$errors->first('txtRecuerdo')}}
          </div>


      </div>
      <div class="card-footer text-body-secondary text-center">
        <div class="d-grid gap-2">
          <button class="btn btn-primary" type="text">Submit</button>
        </div>
        </form>
      </div>
  </div >
  @endsection