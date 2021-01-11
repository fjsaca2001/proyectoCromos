@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h1>Tablero</h1>
@endsection
@section('content')
Bienvenido {{auth()->user()->nombre}}
<br>Administrador
<br>
<br>
@if (Session::has('Mensaje'))
    {{ Session::get('Mensaje') }}
@endif
<h2>Agregar una pregunta</h2>
<section>
    <form action="{{ url('/agregarRespuesta')}}" method="POST">
        {{ csrf_field() }}
        <label for="respuesta" class="">{{ __('Respuesta') }}</label>
        <input id="respuesta" type="text" class=" @error('respuesta') is-invalid @enderror" name="respuesta"
            value="{{ old('respuesta') }}" required autocomplete="respuesta" autofocus>
        @error('respuesta')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="pregunta" class="">{{ __('Pregunta') }}</label>
        <select id="pregunta" name="idpregunta">
            <option value="" selected="selected">Elige una pregunta</option>
            @foreach ($pregunta as $pregunta)
            <option value="{{ $pregunta->idPregunta }}">{{ $pregunta->pregunta }}</option>
            @endforeach
        </select>
    
        <input type="submit" value="agregar">
    </form>
</section>
<h2>Lista de Respuestas</h2>
<section class="table-responsive">
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Respuesta</th>
                <th>Pregunta</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($respuesta as $respuesta)
            <tr>
                <td>{{ $respuesta->respuesta }}</td>
                <td>{{ $respuesta->idPregunta }}</td>
                <td>
                    <a href="}">
                        Editar
                    </a>
                    |
                    <form method="POST" action="{{ url('agregarRespuesta/' . $respuesta->idRespuesta) }}">
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
</section>
@endsection