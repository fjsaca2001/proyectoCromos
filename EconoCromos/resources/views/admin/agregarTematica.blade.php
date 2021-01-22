@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h1>Bienvenido {{auth()->user()->nombre}}</h1>
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
<link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css"/><link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="assets/images/favicon.ico" rel="icon" type="image/ico"/>
<link href="{{ asset('css/administracion.css') }}" rel="stylesheet">
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Encabezado -->
<h4>Lista de temáticas:</h4>
<br>
<!-- Tabla que almacena la lista de cromos -->
<div class="tablaTematicas">
  <!-- Encabezado de la tabla -->
  <table class="table table-fixed table-hover table-bordered">
    <thead class="thead-dark">
      <tr>
        <th class="col-xs-2">Imagen</th>
        <th class="col-xs-2">Título</th>
        <th class="col-xs-2">Descripción</th>
        <th class="col-xs-2">Álbum</th>
        <th class="actions">Acciones</th>
      </tr>
    </thead>
    <!-- Cuerpo de la tabla -->
    <tbody>
    @foreach ($albumContenido as $album)
      @foreach ($album->tematicas as $tematica) 
      <tr>
        <td class="col-xs-2"><img style="width: 100px" src="{{ asset('storage').'/'.$tematica->imgTematica }}"></td>
        <td class="col-xs-2">{{ $tematica->nombreTematica }}</td>
        <td class="col-xs-2">{{ $tematica->descripcion }}</td>
        <td class="col-xs-2">{{ $album->nombre }}</td>
        <td class='action'>
          <a class='btn btn-info' href="{{ url('/crearTematica/' . $tematica->idTematica . '/edit/') }}">
            <i class='icon-edit'></i>
          </a>
          <form class="accionTematica" method="POST" action="{{ url('/crearTematica/' . $tematica->idTematica) }}" style="display:center">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Está seguro de eliminar esta temática del álbum {{$album->nombre}}?');">
              <i class='icon-trash'></i>
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    @endforeach
    </tbody>
  </table>
</div>
<br>
<br>
<!-- Botón para agregar cromo -->
<div class="container text-center">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Agregar temática</button>
</div>
<!-- Ventana emergente -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva temática</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ url('/crearTematica/')}}" enctype="multipart/form-data">
      {{ csrf_field() }}
        <!-- Campo para agregar el nombre de la temática-->
        <div class="mb-3">
          <label for="nombreTematica" class="col-form-label">{{ __('Título') }}</label>
            <input type="text" class="form-control" id="nombreTematica" name="nombreTematica">
            @error('nombreTematica')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <!-- Campo para agregar la descripción de la temática -->
        <div class="mb-3">
          <label for="descripcion" class="col-form-label">{{ __('Descripción') }}</label>
            <textarea type="text" class="form-control" id="descripcion" name="descripcion"></textarea>
            @error('descripcion')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <!-- Campo para agregar la imagen de la temática -->
        <div class="mb-3">
          <label for="imgTematica" class="col-form-label">{{ __('Cargar imagen de la temática') }}</label>
          <input type="file" class="form-control" id="imgTematica" name="imgTematica" accept="image/*">
        </div>
        <!-- Campo para seleccionar el álbum al que pertenece la temática -->
        <div class="mb-3">
          <label for="idAlbum" class="col-form-label">{{ __('Álbum') }}</label>
          <select class="form-control" id="idAlbum" name="idAlbum">
            @foreach ($albumContenido as $album)
            <option value="{{ $album->idAlbum }}">{{ $album->nombre }}</option>
            @endforeach
          </select>
        </div>
        <!-- Botón interno para agregar la temática -->
        <div class="mb-3 text-center">
          <button type="submit" class="btn btn-primary">{{ __('Crear temática') }}</button>
        </div>
      </form>
      <!-- Footer de la ventana emergente -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script src="js/preguntas.js"></script>
@endsection
