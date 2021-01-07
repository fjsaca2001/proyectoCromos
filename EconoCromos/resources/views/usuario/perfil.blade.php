@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentperfil')
<h1>Bienvenido {{ auth()->user()->nickname }}</h1>
<div class="row2">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="#datos">
                <span data-feather=""></span>
                Datos del Usuario
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#modificar">
                <span data-feather=""></span>
                Modificar Datos
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">Cerrar Sesión
            </a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </ul>
</div>
<br>
<br>
<br>
<div class="table-responsive" id="datos">
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Nombre</th>
                <th>Nick</th>
                <th>Correo</th>
                <th>Pais</th>
                <th>Edad</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{ auth()->user()->nombre }}</td>
                <td>{{ auth()->user()->nickname }}</td>
                <td>{{ auth()->user()->email }}</td>
                <td>{{ auth()->user()->pais }}</td>
                <td>{{ auth()->user()->edad }}</td>
            </tr>
        </tbody>
    </table>
</div>

<br>
<br>
<br>
<div class="card-body" id="modificar">
    <h1>Modificar</h1>
    <form method="POST" action="{{ url('/usuarios/' . auth()->user()->idUsuario) }}" enctype="multipart/form-data">
        @csrf
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="form-group row">
            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

            <div class="col-md-6">
                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                    value="{{ auth()->user()->nombre }}" required autocomplete="nombre" autofocus>

                @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="nickname" class="col-md-4 col-form-label text-md-right">{{ __('Nickname') }}</label>

            <div class="col-md-6">
                <input id="nickname" type="text" class="form-control @error('nickname') is-invalid @enderror"
                    name="nickname" value="{{ auth()->user()->nickname }}" required autocomplete="nickname" autofocus>

                @error('nickname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="pais" class="col-md-4 col-form-label text-md-right">{{ __('Pais') }}</label>

            <div class="col-md-6">
                <input id="pais" type="text" class="form-control @error('pais') is-invalid @enderror" name="pais"
                    value="{{ auth()->user()->pais }}" required autocomplete="pais" autofocus>

                @error('pais')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="edad" class="col-md-4 col-form-label text-md-right">{{ __('Edad') }}</label>

            <div class="col-md-6">
                <input id="edad" type="number" class="form-control @error('edad') is-invalid @enderror" name="edad"
                    value="{{ auth()->user()->edad }}" required autocomplete="edad" autofocus>

                @error('edad')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Modificar') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection