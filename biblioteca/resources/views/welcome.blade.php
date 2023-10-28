@extends('layouts.plantilla')
@section('titulo','INICIO')
@section('contenido')
    <link rel="stylesheet" href="css/styles.css">
    
    {{-- CARRUSEL --}}
    <div id="carouselExampleCaptions" class="carousel slide p-4">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <img src="https://somosrandom.files.wordpress.com/2021/07/libros-1.jpg?w=1200" class="d-block mx-auto" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="fw-bold p-2">LOS 10 LIBROS MÁS VENDIDOS</h2>
                    <a class="fw-bold text-black" href="https://www.elmundo.es/la-lectura/2023/10/20/652ff644e4d4d8c00c8b456f.html">LEER MÁS</a>  
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.elindependiente.com/wp-content/uploads/2023/07/libros-2023-martes1a-980x550.jpg" class="d-block mx-auto" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="fw-bold p-2">MEJORES LIBROS DE LA HISTORIA DE LA LITERATURA UNIVERSAL</h2>
                    <a class="fw-bold text-black" href="https://www.fundacionaquae.org/wiki/los-100-mejores-libros-de-todos-los-tiempos/">LEER MÁS</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://2.bp.blogspot.com/-9kgdUYziHBQ/Wd2KZZ6xCuI/AAAAAAAAAXE/8rh533MM3BUHO_URkd-IaRowyHHxM2FCwCLcBGAs/s1600/Libros%2Bpara%2Bleer%2Ben%2B%25281%2529.png" class="d-block mx-auto"
                    alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="fw-bold p-2">LIBROS DE TERROR MÁS LEÍDOS</h2>
                    <a class="fw-bold text-black" href="https://www.planetadelibros.com/blog/actualidad/15/nuestros-tops/11/articulo/libros-de-miedo-mas-terrorificos-para-halloween/30">LEER MÁS</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- FIN CARRUSEL --}}

@endsection