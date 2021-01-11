@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentedit')
@if (Session::has('Mensaje')){{ Session::get('Mensaje') }}
@endif
<section class="modificarCromo">
    <article>
        <h2>Información Actual</h2>
        Nombre: {{$cromos->nombre}} <br>
        Descripción: {{$cromos->descripcion}} <br>
        Imágen: <br><img style="width: 100px" src="{{ asset('storage').'/'.$cromos->imgURL }}"> <br>
        Tematica: 
        @foreach ($tematica as $tematicas)
            @if ($cromos->idTematica === $tematicas->idTematica ) 
                {{ $tematicas->nombreTematica }}
            @endif
        @endforeach
    </article>
    <article>
        <h2>Nueva Información</h2>
        <form method="POST" action="{{ url('/agregarCromo/'. $cromos->idCromo)}}" enctype="multipart/form-data">

            @csrf
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <label for="nombre" >{{ __('Nombre') }}</label>
            <input id="nombre" type="text" name="nombre" value="">
            @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            <label for="descripcion" >{{ __('Descripción del Cromo') }}</label>
            <input id="descripcion" type="text" name="descripcion" value="">
            @error('descripcion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            <label for="imgURL" >{{ __('Imagen del cromo') }}</label>
            <input id="imgURL" type="file" name="imgURL" value="">
            
            <br>
            <label for="idTematica" class="">{{ __('Tematica a la que pertenece') }}</label>
            <select id="idTematica" name="idTematica">
                <option value="" selected="selected">Elige una tematica</option>
                @foreach ($tematica as $tematica)
                <option value="{{ $tematica->idTematica }}">{{ $tematica->nombreTematica }}</option>
                @endforeach
            </select>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Guardar cambios') }}
                    </button>
                </div>
            </div>
        </form>
    </article>
</section> 
@endsection
