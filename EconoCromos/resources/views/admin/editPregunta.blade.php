@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h1>Tablero</h1>
@endsection
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/preguntas.js"></script>
Bienvenido {{ auth()->user()->nombre }}
<br>Administrador
<br>
<br>
@if (Session::has('Mensaje')){{ Session::get('Mensaje') }}
@endif
<h2>Modificar pregunta</h2>
<form method="POST" action="{{ url('agregarPregunta/' . $pregunta->idPregunta) }}" enctype="multipart/form-data">
    @csrf
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <input id="pregunta" type="text" class="@error('pregunta') is-invalid @enderror" name="pregunta"
        value="{{ $pregunta->pregunta }}" required autocomplete="pregunta" autofocus>

    @error('pregunta')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <button type="submit" class="btn btn-primary">
        {{ __('Modificar') }}
    </button>
</form>

@endsection