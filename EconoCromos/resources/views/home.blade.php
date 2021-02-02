@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('content')
@if(Session::has('Mensaje')){{
Session::get('Mensaje')
}}
@endif
<section id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="carousel-caption">

            </div>
            <img src="{{ asset('img/portada.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/descripcion.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/registro.png') }}" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
</section>
@foreach( $albumContenido as $album)
    <section class="tematicas items" id="tematica">
        <h2>{{$album->nombre}}</h2>
        @foreach( $album->tematicas as $tematicas)
            <article class="tema">
                <div class="card" style="width: 25rem;">
                    <a href="">
                        <img src="{{ asset('storage').'/'.$tematicas->imgTematica }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">{{$tematicas['nombreTematica']}}</p>
                        </div>
                    </a>
                    <div class="overlay"> 
                        <div class="textoculto">
                            <br>
                            <a href="{{ url('actividades/#tematica2') }}">
                                <img style="width:35px" src="{{ asset('img/flecha-der2.svg' )}}">
                            </a>
                            <h3 style="margin-top: 12px">{{$tematicas['nombreTematica']}}</h3> 
                            <p>{{$tematicas['descripcion']}}</p>
                            
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    </section>
@endforeach
<script>
    var myCarousel = document.querySelector('#carouselExampleIndicators')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 5500,
        wrap: true,
        pause: false
    })
</script>
@endsection