@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentedit')
    @if (Session::has('Mensaje')){{ Session::get('Mensaje') }}
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1>Editar</h1>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/usuarios/' . $usuarios->idUsuario) }}"
                            enctype="multipart/form-data">
                            @csrf
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="form-group row">
                                <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text"
                                        class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                        value="{{ $usuarios->nombre }}" required autocomplete="nombre" autofocus>

                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nickname"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nickname') }}</label>

                                <div class="col-md-6">
                                    <input id="nickname" type="text"
                                        class="form-control @error('nickname') is-invalid @enderror" name="nickname"
                                        value="{{ $usuarios->nickname }}" required autocomplete="nickname" autofocus>

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
                                    <input id="pais" type="text" class="form-control @error('pais') is-invalid @enderror"
                                        name="pais" value="{{ $usuarios->pais }}" required autocomplete="pais" autofocus>

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
                                    <input id="edad" type="number" class="form-control @error('edad') is-invalid @enderror"
                                        name="edad" value="{{ $usuarios->edad }}" required autocomplete="edad" autofocus>

                                    @error('edad')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <p>Modifique el Rol en base a los siguintes valores: 1: <strong>Super Usuario</strong>, 2:
                                <strong>Admin</strong> y 3: <strong>Usuario</strong>
                            </p>
                            <div class="form-group row">
                                <label for="rol" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>

                                <div class="col-md-6">
                                    <input id="rol" type="number" class="form-control @error('rol') is-invalid @enderror"
                                        name="rol" value="{{ $usuarios->rol }}" required autocomplete="rol">

                                    @error('rol')
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
                </div>
            </div>
        </div>
    </div>
@endsection
