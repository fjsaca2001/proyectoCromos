@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentalbum')
    <section class="estructuraAlbum">
        
        <h1>Album de {{auth()->user()->nickname}}</h1>
        <section class="cromos">

            <article id="activarCromo">
                <img src="img/cromo1.jpeg">
                <div class="cromo" id="cromo">
                <img src="img/cromo1.jpeg">
                    Descripción del cromo <br>
                    5
                </div>
            </article>


            <p class="pCantidad">43/180</p>
        </section>
        
    </section>
@endsection
