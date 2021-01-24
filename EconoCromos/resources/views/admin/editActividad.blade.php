@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h1>Tablero</h1>
@endsection
@section('content')
<section class="modificarAlbum" style="margin-top:6em"> 
    <article>
        <h2>Nueva Información</h2>
        <form method="POST" action="{{ url('/crearActividad/'. $actividades->idActividad )}}" enctype="multipart/form-data">

            @csrf
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <label for="nombreActividad" >{{ __('Nombre de la Actividad') }}</label>
              <input id="nombreActividad" type="text" name="nombreActividad" value="{{$actividades->nombreActividad}}" require>
              @error('nombre')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <br>

            

            <select id="idTematica" name="idTematica">
                @foreach ($albumContenido as $album)
                      <optgroup label="{{$album->nombre}}">
                        @foreach ($album->tematicas as $tematica)
                          <option value="{{ $tematica->idTematica }}">{{ $tematica->nombreTematica }}</option>
                        @endforeach
                      </optgroup>
                @endforeach
              </select>
            <button type="submit" class="btn btn-primary">
                {{ __('Guardar cambios') }}
            </button>
        </form>
    </article>
</section> 
@endsection
