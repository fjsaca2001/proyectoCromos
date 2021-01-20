@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h1>Bienvenido {{auth()->user()->nombre}}</h1>
<h4>Administrador</h4>
@endsection
@section('content')
@if (Session::has('Mensaje')){{ Session::get('Mensaje') }}
@endif

<meta content='lab2023' name='author'>
<meta content='' name='description'>
<meta content='' name='keywords'>
<link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css"/><link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="assets/images/favicon.ico" rel="icon" type="image/ico"/>
<h4>Lista de cromos</h4>
<br>
<section class="table-responsive">
  <div class="tablaCromos">
    <table class='table table-fixed table-hover table-bordered'>
      <thead class="thead-dark">
        <tr>
          <th>#</th>
          <th>Título</th>
          <th>Imagen</th>
          <th>Descripción</th>
          <th>Temática</th>
          <th class='actions'>
            Acciones
          </th>
        </tr>
      </thead>
      <tbody>
      @foreach ($cromo as $cromo)
      @php
      @endphp
      <tr>
        <td>{{ $cromo->idCromo }}</td>
        <td>{{ $cromo->nombre }}</td>
        <td><img style="width: 100px" src="{{ asset('storage').'/'.$cromo->imgURL }}"></td>
        <td>{{ $cromo->descripcion }}</td>
        @foreach ($tematica as $tematicas)
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
      </tbody>
    </table>
  </div>
</section>
<h2>Agregar cromo</h2>
<section class="agregarCromo">
    <article >
        <form method="POST" action="{{ url('/agregarCromo/')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
                <label for="nombre" >{{ __('Nombre') }}</label>
                <input id="nombre" type="text" name="nombre" value="">
                @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br>
                <label for="descripcion" >{{ __('Descripción del Cromo') }}</label>
                <textarea id="descripcion" type="text" name="descripcion"></textarea>
                @error('descripcion')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br>
                <label for="imgURL" >{{ __('Imagen del cromo') }}</label>
                <input id="imgURL" type="file" name="imgURL" value="" accept="image/*">
                <br>
                <label for="idTematica" class="">{{ __('Tematica a la que pertenece') }}</label>
                <select id="idTematica" name="idTematica">
                    @foreach ($tematica as $tematica)
                    <option value="{{ $tematica->idTematica }}">{{ $tematica->nombreTematica }}</option>
                    @endforeach
                </select>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Crear Cromo') }}
                        </button>
                    </div>
                </div>
        </form>
    </article>
</section>
@endsection