@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentedit')
@if (Session::has('Mensaje')){{ Session::get('Mensaje') }}
@endif
<section class="modificarAlbum" style="margin-top:6em"> 
    <article>
        <h2>Nueva Información</h2>
        <form method="POST" action="{{ url('/agregarAlbum/'. $albums->idAlbum )}}" enctype="multipart/form-data">

            @csrf
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <label for="nombre" >{{ __('Nombre') }}</label>
            <input id="nombre" type="text" name="nombre" value="{{$albums->nombre}}" required autocomplete="nombre">
            @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            <label for="descripcion" >{{ __('Descripción del Cromo') }}</label>
            <textarea id="descripcion" type="text" name="descripcion" required autocomplete="descripcion">{{$albums->descripcion}}</textarea>
            @error('descripcion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <button type="submit" class="btn btn-primary">
                {{ __('Guardar cambios') }}
            </button>
        </form>
    </article>
</section> 
@endsection
