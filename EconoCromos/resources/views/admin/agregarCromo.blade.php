@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h1>Cromos</h1>
@endsection
@section('content')
@if (Session::has('Mensaje')){{ Session::get('Mensaje') }}
@endif
Bienvenido {{auth()->user()->nombre}}
<br>Administrador
<br>
<br>
<h2>Cromos Registrados</h2>
<section class="table-responsive">
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Número</th>
                <th>Título</th>
                <th>Imágen</th>
                <th>Descripción</th>
                <th>Temática</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cromo as $cromo)
            @php
            @endphp
            <tr>
                <td>{{ $cromo->numero }}</td>
                <td>{{ $cromo->nombre }}</td>
                <td><img style="width: 100px" src="{{ asset('storage').'/'.$cromo->imgURL }}"></td>
                <td>{{ $cromo->descripcion }}</td>

                @foreach ($tematica as $tematicas)
                    @if ($cromo->idTematica === $tematicas->idTematica ) 
                        <td>{{ $tematicas->nombreTematica }}</td>
                    @endif
                @endforeach
                
                <td>
                    <a href="{{ url('/agregarCromo/' . $cromo->idCromo . '/edit/') }}">
                        Editar
                    </a>
                    
                    <form method="POST" action="{{ url('/agregarCromo/' . $cromo->idCromo) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" onclick="return confirm('¿Desea Borrar el cromo {{ $cromo->nombre }}?');">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
<h2>Añadir un Cromo</h2>
<section class="anadirCromo">
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
                <input id="descripcion" type="text" name="descripcion" value="">
                @error('descripcion')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br>
                <label for="imgURL" >{{ __('Imagen del cromo') }}</label>
                <input id="imgURL" type="file" name="imgURL" value="">
                
                <br>
                <label for="numero" >{{ __('Numeración') }}</label>
                <input id="numero" type="text" name="numero" value="">
                @error('numero')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br>
                <label for="idTematica" class="">{{ __('Tematica a la que pertenece') }}</label>
                <select id="idTematica" name="idTematica">
                    <option value="" selected="selected">Elige una tematica</option>
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