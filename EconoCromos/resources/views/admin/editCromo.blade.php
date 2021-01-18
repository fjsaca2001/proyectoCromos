@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentedit')
@if (Session::has('Mensaje')){{ Session::get('Mensaje') }}
@endif
<section class="modificarCromo">
    <article>
        <h2>Nueva Información</h2>
        <form method="POST" action="{{ url('/agregarCromo/'. $cromos->idCromo)}}" enctype="multipart/form-data">

            @csrf
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <label for="nombre" >{{ __('Nombre') }}</label>
            <input id="nombre" type="text" name="nombre" value="{{$cromos->nombre}}" required autocomplete="nombre">
            @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            <label for="descripcion" >{{ __('Descripción del Cromo') }}</label>
            <textarea id="descripcion" type="text" name="descripcion" required autocomplete="descripcion">{{$cromos->descripcion}}</textarea>
            @error('descripcion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            <label for="imgURL" >{{ __('Imagen del cromo') }}</label>
            <br> <img style="width: 200px" src="{{ asset('storage').'/'.$cromos->imgURL }}"> <br>
            Cargar nueva imagen
            <input id="imgURL" type="file" name="imgURL" value="{{$cromos->imgURl}}" accept="image/*">
            <br>
            <label for="idTematica" class="">{{ __('Tematica a la que pertenece') }}</label>
            <select id="idTematica" name="idTematica">
                @foreach ($tematica as $tematica)
                <option value="{{ $tematica->idTematica }}">{{ $tematica->nombreTematica }}</option>
                @endforeach
            </select>
            <br>
            <button type="submit" class="btn btn-primary">
                {{ __('Guardar cambios') }}
            </button>
        </form>
    </article>
</section> 
@endsection
