@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentalbum')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <section class="estructuraAlbum">
        <section class="navAlbum">
            <nav>
                @php 
                    $n = 1;  
                @endphp
                @foreach( $albumContenido->tematicas as $tematicas)
                    @php
                        $nTematica = "nboton".$n; 
                        $n = $n+1;
                    @endphp
                    <button id="{{$nTematica}}"  value="{{$tematicas['idTematica']-1}}" type="submit" onclick="
                        var x = document.getElementById('{{$nTematica}}').value;
                        document.getElementById('demo2').innerHTML = x;mostarDatos()"> 
                        {{$tematicas['nombreTematica']}}</button>
                @endforeach
            </nav>
        </section>
        <section class="cromos">
            <h1>Álbum de {{auth()->user()->nickname}}</h1> 
            <p id="demo2">2</p>
            <div>
            <script> var Var_JavaScript =  document.getElementById('demo2').textContent;  </script> 
                @php
                    $nphp = "<script> document.write(Var_JavaScript); </script>";
                    $nphp = intval($nphp);
                    echo $nphp;
                @endphp
                @foreach( $albumContenido->tematicas[$nphp]->cromos as $cromo)
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
