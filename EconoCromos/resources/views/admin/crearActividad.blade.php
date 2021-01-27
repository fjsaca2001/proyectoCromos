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
<meta content='lab2023' name='author'>
<meta content='' name='description'>
<meta content='' name='keywords'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css" />
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="assets/images/favicon.ico" rel="icon" type="image/ico" />
<link href="{{ asset('css/administracion.css') }}" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Encabezado -->
<h4>Lista de actividades</h4>
<br>
<!-- Tabla que almacena la lista de actividades -->
<div class="tablaActividades">
  <!-- Encabezado de la tabla -->
  <table class="table table-fixed table-hover table-bordered hh">
    <thead class="thead-dark">
      <tr>
        <th class="col-xs-2">Título</th>
        <th class="col-xs-2">Álbum</th>
        <th class="col-xs-2">Temática</th>
        <th class="col-xs-2">Duración del Quiz</th>
        <th class="actions">Acciones</th>
      </tr>
    </thead>
    <!-- Cuerpo de la tabla -->
    <tbody>
      @foreach ($albumContenido as $album)
        @foreach ($album->tematicas as $tematica)
          @foreach ($tematica->actividad as $actividad)
          <tr>
            <td class="col-xs-2">{{ $actividad->nombreActividad }}</td>
            <td class="col-xs-2">{{ $album->nombre }}</td>
            <td class="col-xs-2">{{ $tematica->nombreTematica}}</td>
            @php
              $minutos = floor(($actividad->duracionTestSeg/60) % 60);
              $segundos = floor($actividad->duracionTestSeg % 60);
            @endphp
            @if($minutos == 1)
              <td class="col-xs-2">{{$minutos}} minuto y {{$segundos}} segundos</td>
            @else
              <td class="col-xs-2">{{$minutos}} minutos y {{$segundos}} segundos</td>
            @endif

            <td class='action'>
              <a class='btn btn-info' href="{{ url('/crearActividad/' . $actividad->idActividad . '/edit/') }}">
                <i class='icon-edit'></i>
              </a>
              <form class="accionCromo" method="POST" action="{{ url('/crearActividad/' . $actividad->idActividad) }}"
                style="display:inline">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger" type="submit"
                  onclick="return confirm('¿Está seguro de eliminar {{$actividad->nombreActividad}} de la tematica {{$tematica->nombreTematica}}? Recuerda toda las preguntas y respuestas ligadas a esta seran eliminadas ¿Deseas continuar?');">
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
</div>
<br>
<br>
<!-- Botón para agregar cromo -->
<div class="container text-center">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
    data-bs-whatever="@mdo">Agregar actividad</button>
</div>
<!-- Ventana emergente -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva actividad</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ url('/crearActividad/')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <!-- Campo para agregar el nombre de la actividad -->
          <div class="mb-3">
            <label for="nombreActividad" class="col-form-label">{{ __('Nombre') }}</label>
            <input type="text" class="form-control" id="nombreActividad" name="nombreActividad" required
              autocomplete="nombreActividad" maxlength="40">
            @error('nombre')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <!-- Campo para seleccionar el album al que pertenece la actividad-->
          <div class="mb-3">
            <label for="albun" class="col-form-label">{{ __('Álbum') }}</label>
            <select class="form-control" id="albun" name="albun" required>
              <option  disabled selected value="">Seleccionar un álbum</option>
                @foreach ($albumContenido as $album)
                  <option value="{{ $album->idAlbum }}">{{ $album->nombre }}</option>
                @endforeach
            </select>
          </div>

          <!-- Campo para seleccionar la tematica a la que pertenece la actividad-->
          <div class="mb-3">
            <label for="tematica" class="col-form-label">{{ __('Temáticas') }}</label>
            <select class="form-control" id="tematica" name="idTematica" required autocomplete="album">
              <option disabled selected>Seleccione una temática</option>
            </select>
          </div>
          <!-- Campo para insertar duracion de la actividad-->
          <div class="mb-3">
            <label for="tiempoMin" class="col-form-label">{{ __('Duración del quiz') }}</label>
            <input type="text" class="form-control" id="tiempoMin" name="tiempoMin" maxlength="1" placeholder="minutos" value="" required>
              <br>
            <input type="text" class="form-control" id="duracionTestSeg" name="duracionTestSeg" maxlength="2" placeholder="segundos" value="">
          </div>

          <!-- Botón interno para agregar el cromo -->
          <div class="mb-3 text-center">
            <button type="submit" class="btn btn-primary">{{ __('Crear actividad') }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="js/preguntas.js"></script>
  @endsection