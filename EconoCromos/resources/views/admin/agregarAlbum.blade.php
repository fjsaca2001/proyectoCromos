@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h1>Bienvenido {{auth()->user()->nombre}}</h1>
<h4>Administrador</h4>
@endsection
@section('content')
@if (Session::has('Mensaje')){{ Session::get('Mensaje') }}
@endif
<link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css"/><link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="assets/images/favicon.ico" rel="icon" type="image/ico"/>
<br>
<section class="table-responsive">
  <div class="tablaCromos">
    <h4>Lista de álbumes</h4>
    <table class='table table-fixed table-hover table-bordered'>
      <thead class="thead-dark">
        <tr>
          <th>Título</th>
          <th>Descripción</th>
          <th>Temáticas</th>
          <th>Cantidad de cromos</th>
          <th class='actions'>
            Acciones
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($albumContenido as $album)
          <tr>
          <td>{{ $album->nombre }}</td>
          <td>{{ $album->descripcion }}</td>
          <td>
            @foreach ($album->tematicas as $tematica)
              {{$tematica->nombreTematica}}  <br>    
            @endforeach
          </td>
          <td>{{ $album->cromosTotales }}</td>
          
          <td class='action'>
            <a class='btn btn-info' href="{{ url('/agregarAlbum/' . $album->idAlbum . '/edit/') }}">
              <i class='icon-edit'></i>
            </a>
            <form class="accionCromo" method="POST" action="{{ url('/agregarAlbum/' . $album->idAlbum) }}" style="display:inline">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button class="btn btn-danger" type="submit" onclick="return confirm('¿Está seguro de eliminar este álbum? Recuerde que no puede borrar albumes en los que ya exista una tematica asociada');">
                <i class='icon-trash'></i>
              </button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
    </table>
  </div>
</section>
<h2>Crear nuevo álbum</h2>
<section class="agregarAlbum">
    <article >
      <form method="POST" action="{{ url('/agregarAlbum/')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
              <label for="nombre" >{{ __('Nombre') }}</label>
              <input id="nombre" type="text" name="nombre" value="" require>
              @error('nombre')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <br>
              <label for="descripcion" >{{ __('Descripción del álbum') }}</label>
              <textarea id="descripcion" type="text" name="descripcion" require></textarea>
              @error('descripcion')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Crear álbum') }}
                      </button>
                  </div>
              </div>
        </form>
  </article>
</section>
@endsection