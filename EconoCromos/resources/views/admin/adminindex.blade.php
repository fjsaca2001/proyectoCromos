@extends('layouts.layout')
@section('titulo', 'Admin Panel | Economía a tu alcance')
@section('contentlist')
    @if (Session::has('Mensaje')){{ Session::get('Mensaje') }}
    @endif

    <br>
    <h2>Gestion De Usuarios</h2>
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
                @foreach ($usuariosC as $usuariosC)
                    @php
                    $roles = ['Super Usuario', 'Admin', 'Usuario'];
                    @endphp
                    <tr>
                        <td>{{ $usuariosC->idUsuario }}</td>
                        <td>{{ $usuariosC->nombre }}</td>
                        <td>{{ $usuariosC->nickname }}</td>
                        <td>{{ $usuariosC->email }}</td>
                        <td>{{ $usuariosC->pais }}</td>
                        <td>{{ $usuariosC->edad }}</td>
                        <th>{{ $roles[$usuariosC->rol - 1] }}</th>
                        <td>
                            <a href="{{ url('/usuarios/' . $usuariosC->idUsuario . '/edit/') }}">
                                Editar
                            </a>
                            |
                            <form method="POST" action="{{ url('/usuarios/' . $usuariosC->idUsuario) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" onclick="return confirm('¿Desea Borrar?');">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection