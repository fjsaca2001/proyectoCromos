@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h1>Bienvenido {{auth()->user()->nombre}}</h1>
@if(auth()->user()->rol == 1)
  <h4>Administrador</h4>
@elseif(auth()->user()->rol == 2)
  <h4>Editor</h4>
@endif
@endsection
@section('content')
@if (Session::has('Mensaje')){{ Session::get('Mensaje') }}
@endif

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<meta content='lab2023' name='author'>
<meta content='' name='description'>
<meta content='' name='keywords'>
<link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css"/><link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="assets/images/favicon.ico" rel="icon" type="image/ico"/>
<br>
<section class="table-responsive">
  <div class="tablaCromos">
  @foreach ($albumContenido as $album)
    <h4>Preguntas de {{$album->nombre}}</h4>
    <table class='table table-fixed table-hover table-bordered'>
      <thead class="thead-dark">
        <tr>
          <th>Pregunta</th>
          <th>Opcion uno</th>
          <th>Opcion dos</th>
          <th>Opcion tres</th>
          <th>Opcion Correcta</th>
          <th>Tematica</th>
          <th>Actividad</th>
          <th class='actions'>
            Acciones
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($album->tematicas as $tematica) 
          @foreach ($tematica->actividad as $actividad)
            @foreach ($actividad->preguntas as $pregunta)
              <tr>
                <td>{{ $pregunta->pregunta }}</td>
                <td>{{ $pregunta->opcion1 }}</td>
                <td>{{ $pregunta->opcion2 }}</td>
                <td>{{ $pregunta->opcion3 }}</td>
                <td>{{ $pregunta->respuestaCorrecta }}</td>
                <td>{{ $tematica->nombreTematica }}</td>
                <td>{{ $actividad->nombreActividad }}</td>
                <td class='action'>
                  <a class='btn btn-info' href="{{ url('/agregarPregunta/' . $pregunta->idPregunta . '/edit/') }}">
                    <i class='icon-edit'></i>
                  </a>
                  <form class="accionCromo" method="POST" action="{{ url('/agregarPregunta/' . $pregunta->idPregunta) }}" style="display:inline">
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
      @endforeach
      </tbody>
    </table>
  @endforeach
  </div>
</section>

<h2>Agregar una pregunta</h2>
<section>
    <form action="{{ url('/agregarPregunta')}}" method="POST">
        {{ csrf_field() }}
        <div>
            <label for="pregunta" class="">{{ __('Pregunta') }}</label>
            <input id="pregunta" type="text" class=" @error('pregunta') is-invalid @enderror" name="pregunta"
                value="{{ old('pregunta') }}" required autocomplete="pregunta" autofocus>
            @error('pregunta')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
        </div>

        <div>
            <label for="opcion1" class="">{{ __('Ingrese la opcion 1') }}</label>
            <input id="opcion1" type="text" class=" @error('opcion1') is-invalid @enderror" name="opcion1"
                value="{{ old('opcion1') }}" required autocomplete="opcion1" autofocus>
            @error('opcion1')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
        </div>

        <div>
            <label for="opcion2" class="">{{ __('Ingrese la opcion 2') }}</label>
            <input id="opcion2" type="text" class=" @error('opcion2') is-invalid @enderror" name="opcion2"
                value="{{ old('opcion2') }}" required autocomplete="opcion2" autofocus>
            @error('opcion2')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
        </div>

        <div>
            <label for="opcion3" class="">{{ __('Ingrese la opcion 3') }}</label>
            <input id="opcion3" type="text" class=" @error('opcion3') is-invalid @enderror" name="opcion3"
                value="{{ old('opcion3') }}" required autocomplete="opcion3" autofocus>
            @error('opcion3')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
        </div>

        <div>
            <label for="respuestaCorrecta" class="">{{ __('Ingrese la respuesta correcta') }}</label>
            <input id="respuestaCorrecta" type="text" class=" @error('respuestaCorrecta') is-invalid @enderror"
                name="respuestaCorrecta" value="{{ old('respuestaCorrecta') }}" required
                autocomplete="respuestaCorrecta" autofocus>
            @error('respuestaCorrecta')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
        </div>
        <div>
            <label for="album" class="">{{ __('Álbum') }}</label>
            <select id="album" name="album" required>
              <option value="" selected="selected">Elige un Álbum</option>
                @foreach ($albumContenido as $album)
                  <option value="{{ $album->idAlbum }}">{{ $album->nombre }}</option>
                @endforeach
            </select>
            <br>
        </div> 
        <div>
            <label for="tematica" class="">{{ __('Tematicas') }}</label>
            <select id="tematica" name="idTematica" required>
                <option value="" selected="selected">Elige una tematica</option>
            </select>
            <br>
        </div>

        <div>
            <label for="actividad" class="">{{ __('Actividades') }}</label>
            <select id="actividad" name="idActividad" required>
                <option value="" selected="selected">Elige una Actividad</option>
            </select>
            <br>
        </div>

        <div>
            <input type="submit" value="agregar">
        </div>
    </form>

</section>

<script src="js/preguntas.js"></script>
@endsection