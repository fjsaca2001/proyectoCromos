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
            <label for="opcion1" class="">{{ __('Opción uno') }}</label>
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
            <label for="opcion2" class="">{{ __('Opción dos') }}</label>
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
            <label for="opcion3" class="">{{ __('Opción tres') }}</label>
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
            <label for="respuestaCorrecta" class="">{{ __('Respuesta correcta') }}</label>
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

        <!-- Campo para seleccionar el álbum de la pregunta -->
        <div class="mb-3">
          <label for="albun" class="">{{ __('Álbum') }}</label>
          <select class="" id="albun" name="albun">
            <option selected="selected">Seleccione un álbum</option>
            @foreach ($albumContenido as $album)
              <option value="{{ $album->idAlbum }}">{{ $album->nombre }}</option>
            @endforeach
          </select>
        </div>
        <!-- Campo para seleccionar la temática de la pregunta -->
        <div class="mb-3">
          <label for="tematica" class="">{{ __('Temática') }}</label>
          <select class="" id="tematica" name="idTematica" required autocomplete="album">
            <option selected="selected">Seleccione una temática</option>
          </select>
        </div>
        <!-- Campo para agregar la actividad de la pregunta -->
        <div class="mb-3">
        <label for="actividad" class="">{{ __('Actividades') }}</label>
          <select class="" id="actividad" name="idActividad" required autocomplete="tematica">
            <option selected="selected">Seleccione una actividad</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">
            {{ __('Modificar') }}
        </button>
    </form>
</div>
<script src="../../js/preguntas.js"></script>

@endsection