@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentcontactos')
<!-- Importación -->
<link href="{{ asset('css/contactos.css') }}" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


<!-- Contenido de la página -->
<div class="contenidoContactos">
    <br>
    <!-- Contenido del perfil 1 -->
    <div class="contenido1">
        <div class="imagen1">
            <img src="{{ asset('img/perfil1.jpg') }}" class="img-fluid" alt="Perfil 1">
        </div>
        <div class="flex1">
            <h5>Información personal</h5>
            <p class="informacion1 lead">
                Mi nombre es Santiago García, tengo 20 años y soy estudiante de la Universidad Técnica Particular de Loja en Ecuador.
            </p>
            <h5>Perfil profesional</h5>
            <p class="perfil1 lead">
                Involucrado en proyectos de desarrollo de software con uso de lenguajes de programación PHP y JavaScript. Conocimientos en el manejo de Base de Datos MySQL, APACHE y uso de framework Laravel.
            </p>
        </div>
        <div class="flex2">
            <h5>Cargo</h5>
            <p class="cargo1 lead">
                Dirigente de proyecto y BackEnd Developer.
            </p>
            <h5>Redes sociales</h5>
            <p class="redes1 lead">
                Facebook: <br> <a href="https://www.facebook.com/profile.php?id=100009902658012">https://www.facebook.com/profile.php?id=100009902658012</a><br>
                GitHub: <br> <a href="https://github.com/SantiagoDGarcia">https://github.com/SantiagoDGarcia</a>
            </p>
        </div>
    </div>
    <br>
    <!-- Contenido del perfil 2 -->
    <div class="contenido1">
        <div class="imagen1">
            <img src="{{ asset('img/perfil2.jfif') }}" class="img-fluid" alt="Perfil 1">
        </div>
        <div class="flex1">
            <h5>Información personal</h5>
            <p class="informacion1 lead">
                Mi nombre es Frank Joel Saca, tengo 19 años y soy estudiante de la Universidad Técnica Particular de Loja en Ecuador.
            </p>
            <h5>Perfil profesional</h5>
            <p class="perfil1 lead">
                Involucrado en proyectos de desarrollo de software con uso de lenguajes de programación PHP y JavaScript. Conocimientos en el manejo de Base de Datos MySQL, APACHE y uso de framework Laravel.
            </p>
        </div>
        <div class="flex2">
            <h5>Cargo</h5>
            <p class="cargo1 lead">
                Arquitecto de software y BackEnd Developer.
            </p>
            <h5>Redes sociales</h5>
            <p class="redes1 lead">
                Instagram: <br> <a href="https://www.instagram.com/franjo19_/">https://www.instagram.com/franjo19_/ </a><br>
                GitHub: <br> <a href="https://github.com/fjsaca2001">https://github.com/fjsaca2001</a>
            </p>
        </div>
    </div>
    <br>
    <!-- Contenido del perfil 3 -->
    <div class="contenido1">
        <div class="imagen1">
            <img src="{{ asset('img/perfil3.jfif') }}" class="img-fluid" alt="Perfil 1">
        </div>
        <div class="flex1">
            <h5>Información personal</h5>
            <p class="informacion1 lead">
                Mi nombre es Royer Masache, tengo 22 años y soy estudiante de la Universidad Técnica Particular de Loja en Ecuador.
            </p>
            <h5>Perfil profesional</h5>
            <p class="perfil1 lead">
                Involucrado en proyectos de desarrollo de software con uso de lenguajes de programación JavaScript y lenguajes HTML y CSS. Conocimientos en el uso de framework Laravel y Bootstrap para maquetación.
            </p>
        </div>
        <div class="flex2">
            <h5>Cargo</h5>
            <p class="cargo1 lead">
                Dirigente de proyecto y FrontEnd Developer.
            </p>
            <h5>Redes sociales</h5>
            <p class="redes1 lead">
                Facebook: <br> <a href="https://www.facebook.com/rjmasache/">https://www.facebook.com/rjmasache/</a><br>
                GitHub: <br> <a href="https://github.com/rjmasache">https://github.com/rjmasache</a>
            </p>
        </div>
    </div>
</div>

@endsection