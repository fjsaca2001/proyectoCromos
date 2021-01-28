@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
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
  integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Formulario para modificar los datos de la actividad -->
<div class="formularioActividades container">
  <form class="row g-3" method="POST" action="{{ url('/crearActividad/'. $actividades->idActividad )}}"
    enctype="multipart/form-data">
    @csrf
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <!-- Campo para modificar el nombre de la la actividad -->
    <div class="col-md-6">
      <label for="nombreActividad" class="form-label">{{ __('Nombre de la actividad') }}</label>
      <input type="text" class="form-control @error('nombreActividad') is-invalid @enderror" id="nombreActividad"
        name="nombreActividad" value="{{$actividades->nombreActividad}}" required autocomplete="nombreActividad">
      @error('nombreActividad')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    {{--
    <!-- Campo para editar el álbum al que pertenece  la actividad -->
    <div class="col-md-6">
      <label for="idTematica" class="form-label">{{ __('Álbum al que pertenece') }}</label>
      <select class="form-control @error('idAlbum') is-invalid @enderror" id="idTematica" name="idTematica">
        @foreach ($albumContenido as $album)
        <optgroup label="{{$album->nombre}}">
          @foreach ($album->tematicas as $tematica)
          <option value="{{ $tematica->idTematica }}">{{ $tematica->nombreTematica }}</option>
          @endforeach
        </optgroup>
        @endforeach
      </select>
    </div> --}}
    
    <!-- Campo para seleccionar el album al que pertenece la actividad-->
    <div class="col-md-6"style="margin-right:5em">
      <label for="albun" class="form-label">{{ __('Album') }}</label>
      <select class="form-control @error('idAlbum') is-invalid @enderror" id="albun" name="albun"
        autocomplete="albun">
        <option disabled selected >Seleccione un álbum</option>
        @foreach ($albumContenido as $album)
        <option value="{{ $album->idAlbum }}">{{ $album->nombre }}</option>
        @endforeach
      </select>
    </div>

    <!-- Campo para seleccionar la tematica a la que pertenece la actividad-->
    <div class="col-md-6" style="margin-right:5em">
      <label for="tematica" class="form-label">{{ __('Temática') }}</label>
      <select class="form-control @error('idAlbum') is-invalid @enderror" id="tematica" name="idTematica" required
        autocomplete="albun">
        <option  disabled selected value="{{$actividades->idActividad}}">Seleccionar una temática</option>
      </select>
    </div>
    <!-- Campo para insertar duracion de la actividad-->
      @php
        $minutos = floor(($actividades->duracionTestSeg/60) % 60);
        $segundos = floor($actividades->duracionTestSeg % 60);
      @endphp
    <label for="tiempoMin" class="form-label">{{ __('Duración del quiz') }}</label> <br>
      <div class="col-md-2"> 
        <label for="tiempoMin" class="form-label">{{ __('Minutos ') }}</label>
        <input type="number" class="form-control" id="tiempoMin" name="tiempoMin" placeholder="minutos" value="{{$minutos}}" required  min="0" max="9">
      </div>
      <div class="col-md-2" style="margin-right:40em"> 
        <label for="duracionTestSeg" class="form-label">{{ __('Segundos ') }}</label>
        <input type="number" class="form-control" id="duracionTestSeg" name="duracionTestSeg" placeholder="segundos" value="{{$segundos}}"  min="0" max="60">
      </div>
    <!-- Botón interno para modificar los datos de la actividad -->
    <div class="botonModificarCromos col-4" >
            <a class='btn btn-secondary' href="{{ url('crearActividad') }}" >Descartar cambios </a>
        </div>
        <!-- Botón interno para modificar los datos de la temática-->
        <div class="botonModificarCromos col-2" style="margin-left:4em">
            <button type="submit" class="btn btn-primary">{{ __('Modificar datos') }}</button>
        </div>
  </form>
</div>
<script src="../../js/preguntas.js"></script>
@endsection