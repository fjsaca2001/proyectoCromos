@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h1>{{auth()->user()->nombre}}</h1>
@if(auth()->user()->rol == 1)
  <h3>Administrador</h3>
@elseif(auth()->user()->rol == 2)
  <h3>Editor</h3>
@endif
@endsection
@section('content')
@if (Session::has('Mensaje')){{ Session::get('Mensaje') }}
@endif

<!-- Importación -->
<link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css"/><link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="assets/images/favicon.ico" rel="icon" type="image/ico"/>
<link href="{{ asset('css/administracion.css') }}" type="text/css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<meta content='lab2023' name='author'>
<meta content='' name='description'>
<meta content='' name='keywords'>
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Encabezado -->
<h4>Lista de preguntas</h4>
<!-- Tabla que almacena la lista de preguntas-->
<div class="tablaPreguntas">
  @foreach ($albumContenido as $album)
  <h5>{{$album->nombre}}</h5>
  <br>
  <table class="table table-fixed table-hover table-bordered">
    <thead class="thead-dark">
      <tr>
        <th class="col-xs-2">Pregunta</th>
        <th class="col-xs-2">Opción 1</th>
        <th class="col-xs-2">Opción 2</th>
        <th class="col-xs-2">Opción 3</th>
        <th class="col-xs-2">Respuesta correcta</th>
        <th class="col-xs-2">Temática</th>
        <th class="col-xs-2">Actividad</th>
        <th class="actions">Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($album->tematicas as $tematica) 
      @foreach ($tematica->actividad as $actividad)
        @foreach ($actividad->preguntas as $pregunta)
      <tr>
        <td class="col-xs-2">{{ $pregunta->pregunta }}</td>
        <td class="col-xs-2">{{ $pregunta->opcion1 }}</td>
        <td class="col-xs-2">{{ $pregunta->opcion2 }}</td>
        <td class="col-xs-2">{{ $pregunta->opcion3 }}</td>
        <td class="col-xs-2"><em>{{ $pregunta->respuestaCorrecta }}</em></td>
        <td class="col-xs-2">{{ $pregunta->tematica['nombreTematica'] }}</td>
        <th class="col-xs-2">{{ $pregunta->actividad['nombreActividad'] }}</th>
        <td class='action'>
          <a class='btn btn-info' href="{{  url('agregarPregunta/'. $pregunta->idPregunta.'/edit')  }}">
            <i class='icon-edit'></i>
          </a>
          <form class="accionUsuario" method="POST" action="{{  url('agregarPregunta/'. $pregunta->idPregunta) }}" style="display:inline">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Está seguro de eliminar esta pregunta de {{$pregunta->actividad->nombreActividad}}?');"> 
              <i class='icon-trash'></i>
            </button>
          </form>
        </td>
      </tr>
        @endforeach
      @endforeach
    @endforeach
    </tbody>
  </table>
  @endforeach
</div>
<br>
<br>
<!-- Botón para agregar pregunta -->
<div class="container text-center">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Agregar pregunta</button>
</div>
<!-- Ventana emergente para agregar la pregunta -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva pregunta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ url('/agregarPregunta')}}" method="POST">
        {{ csrf_field() }}
        <!-- Campo para agregar la pregunta -->
        <div class="mb-3">
          <label for="pregunta" class="col-form-label">{{ __('Pregunta') }}</label>
          <textarea class="form-control @error('pregunta') is-invalid @enderror" id="pregunta" name="pregunta" value="{{ old('pregunta') }}" required autocomplete="pregunta" style="height:100px" maxlength="360"></textarea>
          @error('pregunta')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <!-- Campo para agregar la opción 1 -->
        <div class="mb-3">
          <label for="opcion1" class="col-form-label">{{ __('Ingrese la opción 1') }}</label>
          <input type="text" class="form-control @error('opcion1') is-invalid @enderror" id="opcion1" name="opcion1" value="{{ old('opcion1') }}" required autocomplete="opcion1" maxlength="90">
          @error('opcion1')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <!-- Campo para ingresar la opción 2 -->
        <div class="mb-3">
          <label for="opcion2" class="col-form-label">{{ __('Ingrese la opción 2') }}</label>
          <input type="text" class="form-control @error('opcion2') is-invalid @enderror" id="opcion2" name="opcion2" value="{{ old('opcion2') }}" required autocomplete="opcion2" maxlength="90">
          @error('opcion2')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <!-- Campo para ingresar la opción 3 -->
        <div class="mb-3">
          <label for="opcion3" class="col-form-label">{{ __('Ingrese la opción 3') }}</label>
          <input type="text" class="form-control @error('opcion3') is-invalid @enderror" id="opcion3" name="opcion3" value="{{ old('opcion3') }}" required autocomplete="opcion3" maxlength="90">
          @error('opcion3')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <!-- Campo para ingresar la respuesta correcta -->
        <div class="mb-3">
          <label for="respuestaCorrecta" class="col-form-label">{{ __('Ingrese la respuesta correcta') }}</label>
          <input type="text" class="form-control @error('respuestaCorrecta') is-invalid @enderror" id="respuestaCorrecta" name="respuestaCorrecta" value="{{ old('respuestaCorrecta') }}" required autocomplete="respuestaCorrecta" maxlength="90">
          @error('respuestaCorrecta')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <!-- Campo para seleccionar el álbum de la pregunta -->
        <div class="mb-3">
          <label for="album" class="col-form-label">{{ __('Álbum') }}</label>
          <select class="form-control" id="album" name="album" required>
          <option  disabled selected value="">Seleccionar un álbum</option>
            @foreach ($albumContenido as $album)
              <option value="{{ $album->idAlbum }}">{{ $album->nombre }}</option>
            @endforeach
          </select>
        </div>
        <!-- Campo para seleccionar la temática de la pregunta -->
        <div class="mb-3">
          <label for="tematica" class="col-form-label">{{ __('Temática') }}</label>
          <select class="form-control" id="tematica" name="idTematica" required autocomplete="album">
            <option disabled selected>Seleccione una temática</option>
          </select>
        </div>
        <!-- Campo para agregar la actividad de la pregunta -->
        <div class="mb-3">
        <label for="actividad" class="col-form-label">{{ __('Actividades') }}</label>
          <select class="form-control" id="actividad" name="idActividad" required autocomplete="tematica">
            <option disabled selected>Seleccione una actividad</option>
          </select>
        </div>
        <!-- Botón interno para agregar la pregunta -->
        <div class="mb-3 text-center">
          <button type="submit" class="btn btn-primary">Crear pregunta</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="js/preguntas.js"></script>
@endsection