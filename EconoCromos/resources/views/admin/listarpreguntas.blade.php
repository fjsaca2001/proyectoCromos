@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h1>Tablero</h1>
@endsection
@section('content')
@if (Session::has('Mensaje')){{ Session::get('Mensaje') }}
@endif
Bienvenido {{auth()->user()->nombre}}
<br>Administrador
<br>
<br>
<h2>Lista de preguntas</h2>
<section>
    <form action="{{ url('/agregarPregunta')}}" method="POST">
        {{ csrf_field() }}
        <label for="pregunta" class="">{{ __('Pregunta') }}</label>
        <input id="pregunta" type="text" class=" @error('pregunta') is-invalid @enderror" name="pregunta"
            value="{{ old('pregunta') }}" required autocomplete="pregunta" autofocus>
        @error('pregunta')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="tematica" class="">{{ __('Tematicas') }}</label>
        <select id="tematica" name="idTematica">
            <option value="" selected="selected">Elige una tematica</option>
            @foreach ($tematica as $tematica)
            <option value="{{ $tematica->idTematica }}">{{ $tematica->nombreTematica }}</option>
            @endforeach
        </select>

        <label for="actividad" class="">{{ __('Actividades') }}</label>
        <select id="actividad" name="idActividad">
            <option value="" selected="selected">Elige una Actividad</option>
            @foreach ($actividad as $actividad)
            <option value="{{ $actividad->idActividad }}">{{ $actividad->nombreActividad }}</option>
            @endforeach
        </select>
    
        <input type="submit" value="agregar">
    </form>
@endsection