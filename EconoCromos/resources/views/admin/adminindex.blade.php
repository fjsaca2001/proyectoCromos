@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h1>Bienvenido {{auth()->user()->nombre}}</h1>
<h3>Administrador</h3>
@endsection
@section('content')
@if (Session::has('Mensaje')){{ Session::get('Mensaje') }}
@endif
<!-- Importación -->
<link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css"/><link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="assets/images/favicon.ico" rel="icon" type="image/ico"/>
<link href="{{ asset('css/administracion.css') }}" type="text/css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<meta content='lab2023' name='author'>
<meta content='' name='description'>
<meta content='' name='keywords'>

 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Encabezado -->
<h4>Lista de usuarios:</h4>
<br>
<!-- Tabla que almacena la lista de los usuarios -->
<div class="tablaUsuarios">
  <table class="table table-fixed table-hover table-bordered">
    <thead class="thead-dark">
      <tr>
      <th class="col-xs-2">ID</th>
      <th class="col-xs-2">Nombre</th>
      <th class="col-xs-2">Usuario</th>
      <th class="col-xs-2">Correo</th>
      <th class="col-xs-2">País</th>
      <th class="col-xs-2">Edad</th>
      <th class="col-xs-2">Rol</th>
      <th class="actions">Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($usuariosC as $usuariosC)
    @php
    $roles = ['Administrador', 'Editor', 'Usuario'];
    @endphp
      <tr>
        <td class="col-xs-2">{{ $usuariosC->idUsuario }}</td>
        <td class="col-xs-2">{{ $usuariosC->nombre }}</td>
        <td class="col-xs-2">{{ $usuariosC->nickname }}</td>
        <td class="col-xs-2">{{ $usuariosC->email }}</td>
        <td class="col-xs-2">{{ $usuariosC->pais }}</td>
        <td class="col-xs-2">{{ $usuariosC->edad }}</td>
        <th class="col-xs-2">{{ $roles[$usuariosC->rol - 1] }}</th>
        <td class="action">
          <a class='btn btn-info' href="{{ url('/usuarios/' . $usuariosC->idUsuario . '/edit/') }}">
            <i class='icon-edit'></i>
          </a>
          <form class="accionUsuario" method="POST" action="{{ url('/usuarios/' . $usuariosC->idUsuario) }}" style="display:inline">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit" onclick="return confirm('Seguro que desea eliminar este usuario');">
              <i class='icon-trash'></i>
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
