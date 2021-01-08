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
<h2>Agregar una pregunta</h2>
<section>
    <form action="POST">
        <label for="pregunta" class="">{{ __('Pregunta') }}</label>
        <input id="pregunta" type="text" class=" @error('pregunta') is-invalid @enderror" name="pregunta"
            value="{{ old('pregunta') }}" required autocomplete="pregunta" autofocus>
        @error('pregunta')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="twmatica" class="">{{ __('Tematica') }}</label>
        <select id="tematica" name="tematica">
            <option value="" selected="selected">Elige una tematica</option>
            @foreach ($tematica as $tematica)
            <option value="{{ $tematica->idTematica }}">{{ $tematica->nombreTematica }}</option>
            @endforeach
        </select>

        <label for="actividad" class="">{{ __('') }}</label>
        <input id="actividad" type="text" class=" @error('actividad') is-invalid @enderror" name="actividad"
            value="{{ old('actividad') }}" required autocomplete="actividad" autofocus>
        @error('actividad')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </form>
</section>
@endsection