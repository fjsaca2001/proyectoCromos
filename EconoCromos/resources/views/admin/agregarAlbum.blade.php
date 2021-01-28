@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h1>{{auth()->user()->nombre}}</h1>
<h3>Administrador</h3>
@endsection
@section('content')
@if (Session::has('Mensaje'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('Mensaje') }}
    </div>
@endif
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
<meta content='lab2023' name='author'>
<meta content='' name='description'>
<meta content='' name='keywords'>
<link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css"/><link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="assets/images/favicon.ico" rel="icon" type="image/ico"/>
<link href="{{ asset('css/administracion.css') }}" rel="stylesheet">
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<!-- Encabezado -->
<h4>Lista de álbumes</h4>
<br>
<!-- Tabla que almacena la lista de cromos -->
<div class="tablaAlbumes">
  <!-- Encabezado de la tabla -->
  <table class="table table-fixed table-hover table-bordered hh">
    <thead class="thead-dark">
      <tr>
        <th class="col-xs-2">Nombre</th>
        <th class="col-xs-2">Descripción</th>
        <th class="col-xs-2">Temáticas</th>
        <th class="col-xs-2">Número de cromos</th>
        <th class="actions">Acciones</th>
      </tr>
    </thead>
    <!-- Cuerpo de la tabla -->
    <tbody>
    @foreach ($albumContenido as $album)
      <tr>
        <td class="col-xs-2"><b>{{ $album->nombre }}</b></td>
        <td class="col-xs-2">{{ $album->descripcion }}</td>
        <td class="col-xs-2">
          @foreach ($album->tematicas as $tematica)
            {{$tematica->nombreTematica}}<br>
          @endforeach
        </td>
        <td>
          @php
            $cuenta=0;
          @endphp
          @foreach ($album->tematicas as $tematica)
            @foreach ($tematica->cromos as $cromo)
              @php
                $cuenta = $cuenta +1;
              @endphp  
            @endforeach
          @endforeach
          {{$cuenta}}
        </td>
        <td class='action'>
          <a class='btn btn-info' href="{{ url('/agregarAlbum/' . $album->idAlbum . '/edit/') }}">
            <i class='icon-edit'></i>
          </a>
          <form class="accionAlbum" method="POST" action="{{ url('/agregarAlbum/' . $album->idAlbum) }}" style="display:inline">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Está seguro de eliminar este álbum? Recuerda toda la información ligada a este sera eliminada, tales como cromos, temáticas, actividades y preguntas, ¿Deseas continuar? ');">
              <i class='icon-trash'></i>
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<br>
<br>
<!-- Botón para agregar álbum -->
<div class="container text-center">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Crear álbum</button>
</div>
<!-- Ventana emergente -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo álbum</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ url('/agregarAlbum/')}}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <!-- Campo para agregar el nombre del álbum -->
      <div class="mb-3">
          <label for="nombre" class="col-form-label">{{ __('Nombre') }}</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required autocomplete="nombre" maxlength="30">
            @error('nombre')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <!-- Campo para agregar la descripción del álbum -->
        <div class="mb-3">
          <label for="descripcion" class="col-form-label">{{ __('Descripción') }}</label>
            <textarea type="text" class="form-control" id="descripcion" name="descripcion" required autocomplete="descripcion" style="height:130px" maxlength="500"></textarea>
            @error('descripcion')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <!-- Botón interno para agregar el álbum -->
        <div class="mb-3 text-center">
          <button type="submit" class="btn btn-primary">{{ __('Crear álbum') }}</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="js/preguntas.js"></script>
@endsection