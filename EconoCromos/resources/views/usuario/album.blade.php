@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentalbum')
    <section class="estructuraAlbum">
        <section class="navAlbum">
            <nav>
                @foreach( $albumContenido->tematicas as $tematicas)
                <a href="">{{$tematicas["nombreTematica"]}}</a> <br>
                @endforeach
            </nav>
        </section>
        <section class="cromos">
            <h1>Álbum de {{auth()->user()->nickname}}</h1>
            <div>
                @foreach( $albumContenido->tematicas[0]->cromos as $cromo)
                    <article id="activarCromo">
                        <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                        <div class="cromo" id="cromo">
                            <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                            Descripción del cromo <br>
                            5
                        </div>
                    </article>
                @endforeach
            </div>
            <p class="pCantidad">43/180</p>
        </section>
        
    </section>
        
    </section>
@endsection
