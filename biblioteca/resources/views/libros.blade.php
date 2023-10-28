@extends('layouts.plantilla')
@section('titulo','LIBROS')
@section('libros')
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <div class="container p-5">
    <script>
      // Muestra una alerta SweetAlert cuando el formulario se complete correctamente
      @if(session()->has('confirmacion'))
        Swal.fire({
          icon: 'success',
          title: '¡Formulario completado!',
          text: '{{ session('confirmacion') }}',
        });
      @endif
    </script>
    <div class="card text-center">
      <div class="card-body">
        <form method="POST" action="/guardarli">
          @csrf
          <h1>Registro Libro</h1>
          <div class="row py-3">
            <div class="col text-start">
              <label for="inputEmail4" class="form-label">ISBN:</label>
              <input type="text" name="ISBN" value="{{old('ISBN')}}" class="form-control" placeholder="Ingrese el ISBN del Libro" aria-label="First name">
              <p class="text-primary fst-italic fw-semibold">{{$errors->first('ISBN')}} </p>
            </div>
            <div class="col text-start">
              <label for="inputEmail4" class="form-label">Titulo:</label>
              <input type="text" name="Titulo"  value="{{old('Titulo')}}" class="form-control" placeholder="Ingrese el Titulo del Libro" aria-label="Last name">
              <p class="text-primary fst-italic fw-semibold">{{$errors->first('Titulo')}} </p>
            </div>
          </div>
          <div class="row py-3">
            <div class="col text-start">
              <label for="inputEmail4" class="form-label">Autor:</label>
              <input type="text" name="Autor"  value="{{old('Autor')}}"  class="form-control" placeholder="Ingrese el Autor del Libro" aria-label="First name">
              <p class="text-primary fst-italic fw-semibold">{{$errors->first('Autor')}} </p>
            </div>
            <div class="col text-start">
              <label for="inputEmail4" class="form-label">Páginas:</label>
              <input type="text" name="Paginas"  value="{{old('Paginas')}}" class="form-control" placeholder="Ingrese el Numero de Páginas" aria-label="Last name">
              <p class="text-primary fst-italic fw-semibold">{{$errors->first('Paginas')}} </p>
            </div>
          </div>
          <div class="row py-3">
            <div class="col text-start text-fw-bold">
              <label for="inputEmail4" class="form-label">Editorial:</label>
              <input type="text" name="Editorial"  value="{{old('Editorial')}}" class="form-control" placeholder="Ingrese el Nombre del Editorial" aria-label="First name">
              <p class="text-primary fst-italic fw-semibold">{{$errors->first('Editorial')}} </p>
            </div>
            <div class="col text-start">
              <label for="exampleInputEmail1" class="form-label">Correo Electronico del Editorial:</label>
              <input type="text" name="Correo"  value="{{old('Correo')}}" class="form-control" placeholder="Ingrese el Correo Electronico del Editorial" id="exampleInputEmail1" aria-describedby="emailHelp">
              <p class="text-primary fst-italic fw-semibold">{{$errors->first('Correo')}} </p>
            </div>
          </div>
          <div class="d-grid gap-2 py-3">
            <button class="btn btn-primary" type="submit">REGISTRAR <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg> </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
@endsection
