@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h3>Modificar preguntas</h3>
@endsection
@section('content')
<!-- Importación -->
<link href="{{ asset('css/administracion.css') }}" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Formulario para modificar los datos de la pregunta -->
<div class="formularioPreguntas container">
    <form class="row g-3" method="POST" action="{{ url('agregarPregunta/' . $pregunta->idPregunta) }}" enctype="multipart/form-data">
        @csrf
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <!-- Campo para modificar el nombre de la pregunta-->
        <div class="col-md-12">
            <label for="pregunta" class="form-label">{{ __('Pregunta') }}</label>
            <input type="text" class="form-control @error('pregunta') is-invalid @enderror" id="pregunta" name="pregunta" value="{{ $pregunta->pregunta }}" required autocomplete="pregunta">
            @error('pregunta')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
        </div>
        <!-- Campo para modificar el valor de la opción 1 -->
        <div class="col-md-4">
            <label for="opcion1" class="form-label">{{ __('Opción 1') }}</label>
            <input type="text" class="form-control @error('opcion1') is-invalid @enderror" id="opcion1" name="opcion1" value="{{ $pregunta->opcion1 }}" required autocomplete="opcion1">
            @error('opcion1')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
        </div>
        <!-- Campo para modificar el valor de la opción 2 -->
        <div class="col-md-4">
            <label for="opcion2" class="form-label">{{ __('Opción 2') }}</label>
            <input type="text" class="form-control @error('opcion2') is-invalid @enderror" id="opcion2" name="opcion2" value="{{ $pregunta->opcion2 }}" required autocomplete="opcion2">
            @error('opcion2')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
        </div>
        <!-- Campo para modificar el valor de la opción 3-->
        <div class="col-md-4">
            <label for="opcion3" class="form-label">{{ __('Opción 3') }}</label>
            <input type="text" class="form-control @error('opcion3') is-invalid @enderror" id="opcion3" name="opcion3" value="{{ $pregunta->opcion3 }}" required autocomplete="opcion3">
            @error('opcion3')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
        </div>
        <!-- Campo para modificar el valor de la respuesta correcta -->
        <div class="col-md-4">
            <label for="respuestaCorrecta" class="form-label">{{ __('Respuesta correcta') }}</label>
            <input type="text" class="form-control @error('respuestaCorrecta') is-invalid @enderror" id="respuestaCorrecta" name="respuestaCorrecta" value="{{ $pregunta->respuestaCorrecta }}" required autocomplete="respuestaCorrecta">
            @error('respuestaCorrecta')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
        </div>
        <!-- Botón interno para modificar los datos de la pregunta -->
        <div class="botonModificarPreguntas col-20">
            <button type="submit" class="btn btn-primary">{{ __('Modificar datos') }}</button>
        </div>
    </form>
</div>
@endsection