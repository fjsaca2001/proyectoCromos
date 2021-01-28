@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h3>{{$albums->nombre}}</h3>
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
<link href="{{ asset('css/administracion.css') }}" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Formulario para modificar los datos del usuario -->
<div class="formularioAlbumes container">
    <form class="row g-3" method="POST" action="{{ url('/agregarAlbum/'. $albums->idAlbum )}}" enctype="multipart/form-data">
        @csrf
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <!-- Campo para modificar el nombre del álbum-->
        <div class="col-md-6">
            <label for="nombre" class="form-label">{{ __('Nombre del álbum') }}</label>
            <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{$albums->nombre}}" required autocomplete="nombre">
            @error('nombre')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <!-- Campo para modificar la descripción del álbum -->
        <div class="col-md-8" style="margin-right:5em">
            <label for="descripcion" class="form-label">{{ __('Descripción del álbum') }}</label>
            <textarea type="text" class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion" required autocomplete="descripcion" style="height: 150px; width: 640px">{{$albums->descripcion}}</textarea>
            @error('descripcion')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <!-- Botón interno para modificar los datos del álbum -->
        <div class="botonModificarCromos col-4">
            <a class='btn btn-secondary' href="{{ url('agregarAlbum') }}" >Descartar cambios </a>
        </div>
        <!-- Botón interno para modificar los datos de la temática-->
        <div class="botonModificarCromos col-2" style="margin-left:4em">
            <button type="submit" class="btn btn-primary">{{ __('Modificar datos') }}</button>
        </div>
    </form>
</div>
@endsection