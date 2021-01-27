@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentalbum')
<section style="margin-top: 6em">
    <section class="presentarResult" >

        @foreach($arrayCromosDesbloqueados as $array)
        <article class="cromosResult">
            <img style="width:150px" src="{{ asset('storage').'/'.$array[1] }}"> 
             <br>{{$array[2]}} 
            #{{$array[0]}}
        </article>
        @endforeach
        <br> Tienes {{$correctas}}/{{$cantidadPreguntas}} respuestas correctas  <br>
        <a href="{{ route('album') }}"> Ver mi álbum</a>
    </section>
    
</section>
