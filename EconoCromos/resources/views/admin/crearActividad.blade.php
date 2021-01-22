@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h1>Bienvenido {{auth()->user()->nombre}}</h1>
<h4>Administrador</h4>
@endsection
@section('content')
@if (Session::has('Mensaje')){{ Session::get('Mensaje') }}
@endif
<link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css"/><link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="assets/images/favicon.ico" rel="icon" type="image/ico"/>
<br>
<section class="table-responsive">
  <div class="tablaCromos">
    <h4>Lista de actividades</h4>
    <table class='table table-fixed table-hover table-bordered'>
      <thead class="thead-dark">
        <tr>
          <th>Título</th>
          <th>Álbum al que pertenece</th>
          <th>Temática a la que pertenece</th>
          <th class='actions'>
            Acciones
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($albumContenido as $album)
          @foreach ($album->tematicas as $tematica) 
            @foreach ($tematica->actividad as $actividad) 
              <tr>
                <td>{{ $actividad->nombreActividad }}</td>
                <td>{{ $album->nombre }}</td>
                <td>{{ $tematica->nombreTematica}}</td>
                <td class='action'>
                  <a class='btn btn-info' href="{{ url('/crearActividad/' . $actividad->idActividad . '/edit/') }}">
                    <i class='icon-edit'></i>
                  </a>
                  <form class="accionCromo" method="POST" action="{{ url('/crearActividad/' . $actividad->idActividad) }}" style="display:inline">
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
        @endforeach
      </tbody>
      </table>
  </div>
</section>
<h2>Crear nueva actividad</h2>
<section class="crearActividad">
    <article >
      <form method="POST" action="{{ url('/crearActividad/')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
              <label for="nombreActividad" >{{ __('Nombre de la Actividad') }}</label>
              <input id="nombreActividad" type="text" name="nombreActividad" value="" require>
              @error('nombre')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <br>
              <label for="idTematica" class="">{{ __('Tematica a la que pertenece') }}</label>
              <select id="idTematica" name="idTematica">
                @foreach ($albumContenido as $album)
                      <optgroup label="{{$album->nombre}}">
                        @foreach ($album->tematicas as $tematica)
                          <option value="{{ $tematica->idTematica }}">{{ $tematica->nombreTematica }}</option>
                        @endforeach
                      </optgroup>
                @endforeach
              </select>
              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Crear álbum') }}
                      </button>
                  </div>
              </div>
        </form>
  </article>
</section>
@endsection