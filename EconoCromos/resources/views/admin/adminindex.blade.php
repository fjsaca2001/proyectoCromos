@extends('adminlte::page')
@section('tittle', 'Admin Panel | Economía a tu alcance')
@section('content_header')
<h1>Bienvenido {{auth()->user()->nombre}} <br><h1>
<h4>Administrador</h4>
@endsection
@section('content')
@if (Session::has('Mensaje')){{ Session::get('Mensaje') }}
@endif

<meta content='lab2023' name='author'>
<meta content='' name='description'>
<meta content='' name='keywords'>
<link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css"/><link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="assets/images/favicon.ico" rel="icon" type="image/ico"/>

<h4>
Lista de usuarios
</h4>
<br>
<section class="table-responsive">
  <div class="tablaUsuarios">
    <table class='table table-fixed table-hover table-bordered'>
      <thead class="thead-dark">
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Username</th>
          <th>Correo</th>
          <th>País</th>
          <th>Edad</th>
          <th>Rol</th>
          <th class='actions'>
            Acciones
          </th>
        </tr>
      </thead>
      <tbody>
      @foreach ($usuariosC as $usuariosC)
      @php
      $roles = ['Administrador', 'Editor', 'Usuario'];
      @endphp
      <tr>
        <td>{{ $usuariosC->idUsuario }}</td>
        <td>{{ $usuariosC->nombre }}</td>
        <td>{{ $usuariosC->nickname }}</td>
        <td>{{ $usuariosC->email }}</td>
        <td>{{ $usuariosC->pais }}</td>
        <td>{{ $usuariosC->edad }}</td>
        <th>{{ $roles[$usuariosC->rol - 1] }}</th>
        <td class='action'>
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
</section>
@endsection

