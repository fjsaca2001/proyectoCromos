@extends('layout')
@section('titulo', 'Economía a tu alcance')
@section('contentlist')
<div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <span data-feather="home"></span>
                Usuarios
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file"></span>
                Gestion De Preguntas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="shopping-cart"></span>
                Gestion De Cromos
              </a>
            </li>
          </ul>
        </div>
      </nav>
  
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  
        
        <br><h2>Gestion De Usuarios</h2>
        <div class="table-responsive">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>idUsuarios</th>
                        <th>Nombre</th>
                        <th>Nick</th>
                        <th>Correo</th>
                        <th>Pais</th>
                        <th>Edad</th>
                        <th>Rol</th>
                        <th></th>
                    </tr>
                </thead>
            
                <tbody>
                    @foreach($usuarios as $usuarios)
                    <tr>
                        <td>{{$usuarios->idUsuario}}</td>
                        <td>{{$usuarios->nombre}}</td>
                        <td>{{$usuarios->nickname}}</td>
                        <td>{{$usuarios->correo}}</td>
                        <td>{{$usuarios->pais}}</td>
                        <td>{{$usuarios->edad}}</td>
                        <th>{{$usuarios->rol}}</th>
                        <td>
                          <a href="{{url('/usuarios/'.$usuarios->idUsuario.'/edit/')}}">
                            Editar
                          </a>
                          
                          | 
                            <form method="POST" action="{{ url('/usuarios/'.$usuarios->idUsuario) }}" >
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                                <button type="submit" onclick="return confirm('¿Desea Borrar?');">Borrar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </main>
    </div>
  </div>
@endsection