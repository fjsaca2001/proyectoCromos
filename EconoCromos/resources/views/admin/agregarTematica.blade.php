@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h1>Bienvenido {{auth()->user()->nombre}}</h1>
@if(auth()->user()->rol == 1)
  <h4>Administrador</h4>
@elseif(auth()->user()->rol == 2)
  <h4>Editor</h4>
@endif
@endsection
@section('content')
@if (Session::has('Mensaje')){{ Session::get('Mensaje') }}
@endif

<meta content='lab2023' name='author'>
<meta content='' name='description'>
<meta content='' name='keywords'>
<link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css"/><link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="assets/images/favicon.ico" rel="icon" type="image/ico"/>
<br>
<section class="table-responsive">
  <div class="tablaCromos">
    <h4>Lista de temáticas</h4>
    <table class='table table-fixed table-hover table-bordered'>
      <thead class="thead-dark">
        <tr>
          <th>Imagen</th>
          <th>Título</th>
          <th>Descripción</th>
          <th>Álbum</th>
          <th class='actions'>
            Acciones
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($albumContenido as $album)
            @foreach ($album->tematicas as $tematica) 
                <tr>
                  <td><img style="width: 100px" src="{{ asset('storage').'/'.$tematica->imgTematica }}"></td>
                  <td>{{ $tematica->nombreTematica }}</td>
                  <td>{{ $tematica->descripcion }}</td>
                  <td>{{ $album->nombre }}</td>
                  <td class='action'>
                    <a class='btn btn-info' href="{{ url('/crearTematica/' . $tematica->idTematica . '/edit/') }}">
                      <i class='icon-edit'></i>
                    </a>
                    <form class="accionCromo" method="POST" action="{{ url('/crearTematica/' . $tematica->idTematica) }}" style="display:inline">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button class="btn btn-danger" type="submit" onclick="return confirm('¿Está seguro de eliminar esta temática del álbum {{$album->nombre}}?');">
                        <i class='icon-trash'></i>
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
          @endforeach
      </tbody>
    </table>
  </div>
</section>
<h2>Agregar temática</h2>
<section class="agregarTematica">
    <article >
      <form method="POST" action="{{ url('/crearTematica/')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <label for="nombreTematica" >{{ __('Título') }}</label>
          <input id="nombreTematica" type="text" name="nombreTematica" value="">
          @error('nombreTematica')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <br>
          <label for="descripcion" >{{ __('Descripción de la temática') }}</label>
          <textarea id="descripcion" type="text" name="descripcion"></textarea>
          @error('descripcion')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <br>
          <label for="imgTematica" >{{ __('Imagen de la temática') }}</label>
          <input id="imgTematica" type="file" name="imgTematica" value="" accept="image/*">
          <br>
          <label for="idAlbum" class="">{{ __('Álbum al que pertenece') }}</label>
          <select id="idAlbum" name="idAlbum">
            @foreach ($albumContenido as $album)
              <option value="{{ $album->idAlbum }}">{{ $album->nombre }}</option>
            @endforeach
          </select>
          <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Crear temática') }}
                  </button>
              </div>
          </div>
        </form>
  </article>
</section>
@endsection