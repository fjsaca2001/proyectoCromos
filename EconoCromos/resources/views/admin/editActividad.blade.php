@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h3>Modificar actividades</h3>
@endsection
@section('content')
<!-- Importación -->
<link href="{{ asset('css/administracion.css') }}" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Formulario para modificar los datos de la actividad -->
<div class="formularioActividades container">
    <form class="row g-3" method="POST" action="{{ url('/crearActividad/'. $actividades->idActividad )}}" enctype="multipart/form-data">
        @csrf
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <!-- Campo para modificar el nombre de la la actividad -->
        <div class="col-md-6">
            <label for="nombreActividad" class="form-label">{{ __('Nombre de la actividad') }}</label>
            <input type="text" class="form-control @error('nombreActividad') is-invalid @enderror" id="nombreActividad" name="nombreActividad" value="{{$actividades->nombreActividad}}" required autocomplete="nombreActividad">
            @error('nombreActividad')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
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
        </div>
        <!-- Botón interno para modificar los datos de la actividad -->
        <div class="botonModificarActividades col-20">
            <button type="submit" class="btn btn-primary">{{ __('Modificar datos') }}</button>
        </div>
    </form>
</div>
@endsection