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
<h4>Lista de cromos:</h4>
<!-- Tabla que almacena la lista de cromos -->
<div class="tablaCromos">
    <!-- Encabezado de la tabla -->
    @foreach ($albumContenido as $album)
    <table class="table table-fixed table-hover table-bordered">
    <h5>{{$album->nombre}}</h5>
    <br>
      <thead class="thead-dark">
        <tr>
          <th class="col-xs-2">#</th>
          <th class="col-xs-2">Título</th>
          <th class="col-xs-2">Imagen</th>
          <th class="col-xs-2">Descripción</th>
          <th class="col-xs-2">Temática</th>
          <th class="actions">Acciones</th>
        </tr>
      </thead>
      <!-- Cuerpo de la tabla -->
      <tbody>
      @foreach ($album->tematicas as $tematica) 
      @foreach ($tematica->cromos as $cromo)
      <tr>
        <td class="col-xs-2">{{ $cromo->idCromo }}</td>
        <td class="col-xs-2">{{ $cromo->nombre }}</td>
        <td class="col-xs-2"><img style="width: 80px" src="{{ asset('storage').'/'.$cromo->imgURL }}"></td>
        <td class="col-xs-2">{{ $cromo->descripcion }}</td>
        @foreach ($album->tematicas as $tematicas)
          @if ($cromo->idTematica === $tematicas->idTematica) 
            <td>{{ $tematicas->nombreTematica }}</td>
          @endif
        @endforeach
        <td class='action'>
          <a class='btn btn-info' href="{{ url('/agregarCromo/' . $cromo->idCromo . '/edit/') }}">
            <i class='icon-edit'></i>
          </a>
          <form class="accionCromo" method="POST" action="{{ url('/agregarCromo/' . $cromo->idCromo) }}" style="display:inline">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Está seguro de eliminar este cromo?');">
              <i class='icon-trash'></i>
            </button>
          </form>
        </td>
      </tr>
      @endforeach
      @endforeach
    </tbody>
  </table>
  @endforeach
</div>
<br>
<br>

<!-- Botón para agregar cromo -->
<div class="container text-center">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Agregar cromo</button>
</div>
<!-- Ventana emergente -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo cromo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ url('/agregarCromo/')}}" enctype="multipart/form-data">
      {{ csrf_field() }}
        <!-- Campo para agregar el nombre del cromo -->
        <div class="mb-3">
          <label for="nombre" class="col-form-label">{{ __('Nombre') }}</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
            @error('nombre')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <!-- Campo para agregar la descripción del cromo -->
        <div class="mb-3">
          <label for="descripcion" class="col-form-label">{{ __('Descripción') }}</label>
            <textarea type="text" class="form-control" id="descripcion" name="descripcion"  required autocomplete="descripcion"></textarea>
            @error('descripcion')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <!-- Campo para agregar la imagen del cromo -->
        <div class="mb-3">
          <label for="imgURL" class="col-form-label">{{ __('Cargar imagen del cromo') }}</label>
          <input type="file" class="form-control" id="imgURL" name="imgURL" accept="image/*">
        </div>
        <!-- Campo para seleccionar la temática del cromo -->
        <div class="mb-3">
          <label for="idTematica" class="col-form-label">{{ __('Temática') }}</label>
            <select class="form-control" id="idTematica" name="idTematica">
            @foreach ($albumContenido as $album)
            <optgroup label="{{$album->nombre}}">
              @foreach ($album->tematicas as $tematica)
              <option value="{{ $tematica->idTematica }}">{{ $tematica->nombreTematica }}</option>
              @endforeach
            </optgroup>
            @endforeach
          </select>
        </div>
        <!-- Botón interno para agregar el cromo -->
        <div class="mb-3 text-center">
          <button type="submit" class="btn btn-primary">{{ __('Crear cromo') }}</button>
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