@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h1>Tablero</h1>
@endsection
@section('content')
@if (Session::has('Mensaje')){{ Session::get('Mensaje') }}
@endif
Bienvenido {{auth()->user()->nombre}}
<br>Administrador
<br>
<br>
<h2>Agregar una pregunta</h2>
<section>
    <form action="">
        <label for="pregunta" class="">{{ __('Pregunta') }}</label>
        <input id="pregunta" type="text" class=" @error('pregunta') is-invalid @enderror" name="pregunta"
            value="{{ old('pregunta') }}" required autocomplete="pregunta" autofocus>
        @error('pregunta')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="tematica" class="">{{ __('Tematicas') }}</label>
        <select id="tematica" name="tematica">
            <option value="" selected="selected">Elige una tematica</option>
            @foreach ($tematica as $tematica)
            <option value="{{ $tematica->idTematica }}">{{ $tematica->nombreTematica }}</option>
            @endforeach
        </select>

        <label for="actividad" class="">{{ __('Actividades') }}</label>
        <select id="actividad" name="actividad">
            <option value="" selected="selected">Elige una Actividad</option>
            @foreach ($actividad as $actividad)
            <option value="{{ $actividad->idActividad }}">{{ $actividad->nombreActividad }}</option>
            @endforeach
        </select>

    </form>
    <form action="">
        <h3>Ingrese las alternativas posibles<em> max y min 4</em></h3>
        <label for="alternativa1" class="">{{ __('Respuesta posible 1') }}</label>
        <input id="alternativa1" type="text" name="alternativa1"><br>

        <label for="alternativa2" class="">{{ __('Respuesta posible 2') }}</label>
        <input id="alternativa2" type="text" name="alternativa2"><br>

        <label for="alternativa3" class="">{{ __('Respuesta posible 3') }}</label>
        <input id="alternativa3" type="text" name="alternativa3"><br>

        <label for="alternativa4" class="">{{ __('Respuesta posible 4') }}</label>
        <input id="alternativa4" type="text" name="alternativa4"><br>

        <input type="radio" name="respuesta" value="1" checked>Respuesta posible 1<br>
        <input type="radio" name="respuesta" value="2" checked>Respuesta posible 2<br>
        <input type="radio" name="respuesta" value="3" checked>Respuesta posible 3<br>
        <input type="radio" name="respuesta" value="4" checked>Respuesta posible 4<br>
    </form>

</section>
@endsection