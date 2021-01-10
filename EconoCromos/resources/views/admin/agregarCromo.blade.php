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
                <th>Temática a la que pertenece</th>
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
                <td><img style="width: 100px" src="{{ $cromo->imgURL }}"></td>
                <td>{{ $cromo->descripcion }}</td>
                <td>{{ $cromo->idTematica }}</td>
                <td>
                    <a href="{{ url('/\/' . $cromo->idCromo . '/edit/') }}">
                        Editar
                    </a>
                    
                    <form method="POST" action="{{ url('/agregarCromo/' . $cromo->idCromo) }}">
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
<h2>Añadir un Cromo</h2>
<section>
    <article class ="anadirCromo">
        <form method="POST" action="{{ url('/cromos/' . $cromo->idCromo) }}"
            enctype="multipart/form-data">
            @csrf
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
                <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                <input id="nombre" type="text"
                    class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                    value="{{ $cromo->nombre }}" required autocomplete="nombre" autofocus>

                @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </form>
    </article>
</section>
@endsection