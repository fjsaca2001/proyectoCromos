@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h3>Modificar temáticas</h3>
@endsection
@section('content')
<!-- Importación -->
<link href="{{ asset('css/administracion.css') }}" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Formulario para modificar los datos de la temática -->
<div class="formularioTematicas container">
    <form class="row g-3" method="POST" action="{{ url('/crearTematica/'. $tematicas->idTematica)}}" enctype="multipart/form-data">
        @csrf
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <!-- Campo para modificar el nombre de la temática -->
        <div class="col-md-4">
            <label for="nombreTematica" class="form-label">{{ __('Nombre de la temática') }}</label>
            <input type="text" class="form-control @error('nombreTematica') is-invalid @enderror" id="nombreTematica" name="nombreTematica" value="{{$tematicas->nombreTematica}}" required autocomplete="nombreTematica">
            @error('nombreTematica')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <!-- Campo para modificar la descripción de la temática -->
        <div class="col-md-10">
            <label for="descripcion" class="form-label">{{ __('Descripción de la temática') }}</label>
            <textarea type="text" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion" value="{{$tematicas->descripcion}}" required autocomplete="descripcion"></textarea>
            @error('descripcion')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <!-- Campo que muestra la imagen de la temática -->
        <div class="col-md-4">
            <label for="imgTematica" class="form-label">{{ __('Imagen de la temática') }}</label><br>
            <img style="width: 200px" src="{{ asset('storage').'/'.$tematicas->imgTematica }}">
        </div>
        <!-- Campo para modificar la imagen de la temática -->
        <div class="col-md-6">
            <label for="imgTematica" class="form-label">{{ __('Cargar nueva imagen') }}</label>
            <input type="file" class="form-control" id="imgTematica" name="imgTematica" accept="image/*" required autocomplete="imgTematica">
        </div>
        <!-- Campo para editar el álbum al que pertenece  la temática -->
        <div class="col-md-4">
            <label for="idTematica" class="form-label">{{ __('Álbum al que pertenece') }}</label>
            <select class="form-control @error('idAlbum') is-invalid @enderror" id="idAlbum" name="idAlbum">
                @foreach ($albumContenido as $album)
                <option value="{{ $album->idAlbum }}">{{ $album->nombre }}</option>
                @endforeach
            </select>
        </div>
        <!-- Botón interno para modificar los datos de la temática-->
        <div class="botonModificarTematicas col-20">
            <button type="submit" class="btn btn-primary">{{ __('Modificar datos') }}</button>
        </div>
    </form>
</div>
@endsection