@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentalbum')
<section style="margin-top: 6em">
    {{$correctas}}
    <br>
    {{$cantidadPreguntas}}

    @foreach( $albumContenido as $album)
        {{$album->nombre}}
    @endforeach

</section>
