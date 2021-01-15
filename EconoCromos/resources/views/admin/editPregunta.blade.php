@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h1>Tablero</h1>
@endsection
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
Bienvenido {{ auth()->user()->nombre }}
<br>Administrador
<br>
<br>
@if (Session::has('Mensaje')){{ Session::get('Mensaje') }}
@endif
<div>
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


        <div>
            <label for="opcion1" class="">{{ __('Actualice la opcion 1') }}</label>
            <input id="opcion1" type="text" class=" @error('opcion1') is-invalid @enderror" name="opcion1"
                value="{{ $pregunta->opcion1 }}" required autocomplete="opcion1" autofocus>
            @error('opcion1')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
        </div>

        <div>
            <label for="opcion2" class="">{{ __('Actualice la opcion 2') }}</label>
            <input id="opcion2" type="text" class=" @error('opcion2') is-invalid @enderror" name="opcion2"
                value="{{ $pregunta->opcion2 }}" required autocomplete="opcion2" autofocus>
            @error('opcion2')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
        </div>

        <div>
            <label for="opcion3" class="">{{ __('Actualice la opcion 3') }}</label>
            <input id="opcion3" type="text" class=" @error('opcion3') is-invalid @enderror" name="opcion3"
                value="{{ $pregunta->opcion3 }}" required autocomplete="opcion3" autofocus>
            @error('opcion3')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
        </div>

        <div>
            <label for="respuestaCorrecta" class="">{{ __('Actualice la respuesta correcta') }}</label>
            <input id="respuestaCorrecta" type="text" class=" @error('respuestaCorrecta') is-invalid @enderror"
                name="respuestaCorrecta" value="{{ $pregunta->respuestaCorrecta }}" required
                autocomplete="respuestaCorrecta" autofocus>
            @error('respuestaCorrecta')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
        </div>

        <button type="submit" class="btn btn-primary">
            {{ __('Modificar') }}
        </button>
    </form>
</div>
<script src="js/preguntas.js"></script>
@endsection