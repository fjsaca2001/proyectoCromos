@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h1>Tablero</h1>
@endsection
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
        <label for="pregunta" class="">{{ __('Pregunta') }}</label>
        <input id="pregunta" type="text" class=" @error('pregunta') is-invalid @enderror" name="pregunta"
            value="{{ old('pregunta') }}" required autocomplete="pregunta" autofocus>
        @error('pregunta')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="tematica" class="">{{ __('Tematicas') }}</label>
        <select id="tematica" name="idTematica">
            <option value="" selected="selected">Elige una tematica</option>
            @foreach ($tematica as $tematica)
            <option value="{{ $tematica->idTematica }}">{{ $tematica->nombreTematica }}</option>
            @endforeach
        </select>

        <label for="actividad" class="">{{ __('Actividades') }}</label>
        <select id="actividad" name="idActividad">
            <option value="" selected="selected">Elige una Actividad</option>

        </select>

        <input type="submit" value="agregar">
    </form>

</section>

    {{-- <form action="">
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
    </form> --}}

</section>
<h2>Lista de Pregutnas</h2>
<section class="table-responsive">
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Pregunta</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($pregunta as $pregunta)
            <tr>
                <td>{{ $pregunta->pregunta }}</td>
                <td>
                    <a href="{{  url('agregarPregunta/'. $pregunta->idPregunta.'/edit)  }}">
                        Editar
                    </a>
                    |
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