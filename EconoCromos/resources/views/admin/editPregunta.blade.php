@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h3>{{ $pregunta->pregunta }}</h3>
@endsection
@section('content')
@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- Importación -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<link href="{{ asset('css/administracion.css') }}" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>

<!-- Formulario para modificar los datos de la pregunta -->
<div class="formularioPreguntas container">
    <form class="row g-3" method="POST" action="{{ url('agregarPregunta/' . $pregunta->idPregunta) }}"
        enctype="multipart/form-data">
        @csrf
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <!-- Campo para modificar el nombre de la pregunta-->
        <div class="col-md-12">
            <label for="pregunta" class="form-label">{{ __('Texto') }}</label>
            <input type="text" class="form-control @error('pregunta') is-invalid @enderror" id="pregunta"
                name="pregunta" value="{{ $pregunta->pregunta }}" required autocomplete="pregunta">
            @error('pregunta')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
        </div>
        <!-- Campo para modificar el valor de la opción 1 -->
        <div class="col-md-4">
            <label for="opcion1" class="form-label">{{ __('Opción uno') }}</label>
            <input type="text" class="form-control @error('opcion1') is-invalid @enderror" id="opcion1" name="opcion1"
                value="{{ $pregunta->opcion1 }}" required autocomplete="opcion1">
            @error('opcion1')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
        </div>
        <!-- Campo para modificar el valor de la opción 2 -->
        <div class="col-md-4">
            <label for="opcion2" class="form-label">{{ __('Opción dos') }}</label>
            <input type="text" class="form-control @error('opcion2') is-invalid @enderror" id="opcion2" name="opcion2"
                value="{{ $pregunta->opcion2 }}" required autocomplete="opcion2">
            @error('opcion2')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
        </div>
        <!-- Campo para modificar el valor de la opción 3-->
        <div class="col-md-4">
            <label for="opcion3" class="form-label">{{ __('Opción tres') }}</label>
            <input type="text" class="form-control @error('opcion3') is-invalid @enderror" id="opcion3" name="opcion3"
                value="{{ $pregunta->opcion3 }}" required autocomplete="opcion3">
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
            <input type="text" class="form-control @error('respuestaCorrecta') is-invalid @enderror"
                id="respuestaCorrecta" name="respuestaCorrecta" value="{{ $pregunta->respuestaCorrecta }}" required
                autocomplete="respuestaCorrecta">
            @error('respuestaCorrecta')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
        </div>

        <!-- Campo para seleccionar el álbum de la pregunta -->
        <div class="col-md-6">
            <label for="albun" class="form-label">{{ __('Álbum') }}</label>
            <select class="form-control @error('idAlbum') is-invalid @enderror" id="albun" name="albun">
                <option disabled selected value="">Seleccione un álbum</option>
                @foreach ($albumContenido as $album)
                <option value="{{ $album->idAlbum }}">{{ $album->nombre }}</option>
                @endforeach
            </select>
        </div>

        <!-- Campo para seleccionar la temática de la pregunta -->
        <div class="col-md-6">
            <label for="tematica" class="form-label">{{ __('Temática') }}</label>
            <select class="form-control @error('udTematica') is-invalid @enderror" id="tematica" name="idTematica" required autocomplete="album">
                <option disabled selected value="{{$pregunta->idTematica}}">Seleccione una temática</option>
            </select>
        </div>

        <!-- Campo para agregar la actividad de la pregunta -->
        <div class="col-md-6">
            <label for="actividad" class="form-label">{{ __('Actividades') }}</label>
            <select class="form-control @error('idActividad') is-invalid @enderror" id="actividad" name="idActividad" required autocomplete="tematica">
                <option disabled selected value="{{$pregunta->idActividad}}">Seleccione una actividad</option>
            </select>
        </div>

        <!-- Botón interno para modificar los datos de la pregunta -->
        <div class="botonModificarCromos col-8">
            <a class='btn btn-secondary' href="{{ url('agregarPregunta') }}" >Descartar cambios </a>
        </div>
        <!-- Botón interno para modificar los datos de la temática-->
        <div class="botonModificarCromos col-2" style="margin-left:3.5em">
            <button type="submit" class="btn btn-primary">{{ __('Modificar datos') }}</button>
        </div>
    </form>
</div>
<script src="../../js/preguntas.js"></script>

@endsection