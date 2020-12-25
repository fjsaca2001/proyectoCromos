@extends('layout')
@section('titulo', 'Economía a tu alcance')
@section('contentedit')                                                                 
    <form action="{{ url('/usuarios/'.$usuarios->idUsuario)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <label for="nombre">{{ 'Nombre' }}</label>
        <input type="text" name="nombre" id="nombre" value="{{$usuarios->nombre}}"><br>
        <label for="nickname">{{ 'NickName' }}</label>
        <input type="text" name="nickname" id="nickname" value="{{$usuarios->nickname}}"><br>
        <label for="correo">{{ 'Correo' }}</label>
        <input type="email" name="correo" id="correo" value="{{$usuarios->correo}}"><br>
        <label for="pais">{{ 'Pais' }}</label>
        <input type="text" name="pais" id="pais" value="{{$usuarios->pais}}"><br>
        <label for="edad">{{ 'Edad' }}</label>
        <input type="number" name="edad" id="edad" value="{{$usuarios->edad}}"><br>
        <label for="contraseña">{{ 'Contraseña' }}</label>
        <input type="text" name="contraseña" id="contraseña" value="{{$usuarios->contraseña}}"><br>
        <input type="submit" value="Modificar">
    </form>
</div>
@endsection