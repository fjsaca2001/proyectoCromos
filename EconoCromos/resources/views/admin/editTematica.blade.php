@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentedit')
@if (Session::has('Mensaje')){{ Session::get('Mensaje') }}
@endif
<section class="modificarCromo">
    <article>
        <h2>Nueva Información</h2>
        <form method="POST" action="{{ url('/crearTematica/'. $tematicas->idTematica)}}" enctype="multipart/form-data">

            @csrf
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <label for="nombreTematica" >{{ __('Título') }}</label>
            <input id="nombreTematica" type="text" name="nombreTematica" value="{{$tematicas->nombreTematica}}" required autocomplete="nombreTematica">
            @error('nombreTematica')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            <label for="descripcion" >{{ __('Descripción de la temática') }}</label>
            <textarea id="descripcion" type="text" name="descripcion" required autocomplete="descripcion">{{$tematicas->descripcion}}</textarea>
            @error('descripcion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            <label for="imgTematica" >{{ __('Imagen de la temática') }}</label>
            <br> <img style="width: 200px" src="{{ asset('storage').'/'.$tematicas->imgTematica }}"> <br>
            Cargar nueva imagen
            <input id="imgTematica" type="file" name="imgTematica" value="{{$tematicas->imgTematica}}" accept="image/*">
            <br>
            <label for="idTematica" class="">{{ __('Álbum al que pertenece') }}</label>
            <select id="idAlbum" name="idAlbum">
                @foreach ($albumContenido as $album)
                  <option value="{{ $album->idAlbum }}">{{ $album->nombre }}</option>
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
