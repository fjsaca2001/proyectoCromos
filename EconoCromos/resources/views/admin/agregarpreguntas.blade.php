@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h1>Tablero</h1>
@endsection
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

Bienvenido {{auth()->user()->nombre}}
<br>Administrador
<br>
<br>
@if (Session::has('Mensaje')){{ Session::get('Mensaje') }}
@endif
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
            <label for="tematica" class="">{{ __('Tematicas') }}</label>
            <select id="tematica" name="idTematica" required>
                <option value="" selected="selected">Elige una tematica</option>
                @foreach ($tematica as $tematica)
                <option value="{{ $tematica->idTematica }}">{{ $tematica->nombreTematica }}</option>
                @endforeach
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

</section>
<h2>Lista de Pregutnas</h2>
<section class="table-responsive">
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Pregunta</th>
                <th>Opcion 1</th>
                <th>Opcion 2</th>
                <th>Opcion 3</th>
                <th>Repuesta Correcta</th>
                <th>Tematica</th>
                <th>Actividad</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($pregunta as $pregunta)
            <tr>
                <td>{{ $pregunta->pregunta }}</td>
                <td>{{ $pregunta->opcion1 }}</td>
                <td>{{ $pregunta->opcion2 }}</td>
                <td>{{ $pregunta->opcion3 }}</td>
                <td><em>{{ $pregunta->respuestaCorrecta }}</em></td>
                <td>{{ $pregunta->tematica['nombreTematica'] }}</td>
                <td>{{ $pregunta->actividad['nombreActividad'] }}</td>
                <td>
                    <a href="{{  url('agregarPregunta/'. $pregunta->idPregunta.'/edit')  }}">
                        Editar
                    </a>

                    <form method="POST" action="{{  url('agregarPregunta/'. $pregunta->idPregunta) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" onclick="return confirm('¿Desea Borrar?');">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
<script src="js/preguntas.js"></script>
@endsection