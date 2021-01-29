@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentperfil')
<h1>Bienvenido {{ auth()->user()->nickname }}</h1>

<br>
<br>
<br>
<div>
    <h1>Información Personal </h1>
    <h2>Nombre: {{ auth()->user()->nombre }} </h2> 
    <h2>Nick Name: {{ auth()->user()->nickname }} </h2>
    <h2>Correo: {{ auth()->user()->email }} </h2>
    <h2>Pais: {{ auth()->user()->pais }} </h2>
    <h2>Edad: {{ auth()->user()->edad }} </h2>
</div>

<br>
<br>
<br>
<div class="card-body" id="modificar">
    <h1>Modificar Datos</h1>
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