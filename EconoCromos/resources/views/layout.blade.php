<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/animation.js') }}" type="text/javascript"></script>
    <title>@yield('titulo')</title>
</head>

<body>
    <header class="cabeceraPrincipal">
        <svg class="logo" width="100px" hei viewBox="0 0 101 107" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M64.6461 61.0012C64.3704 64.2917 63.9856 67.4515 63.5058 70.451L38.3755 70.2014C37.9011 67.1935 37.5219 64.0262 37.2523 60.729L64.6461 61.0012ZM39.716 77.2151L62.154 77.438C61.3542 80.9187 60.4179 84.0973 59.3749 86.9118C57.6265 91.6296 55.7122 94.9587 53.9407 96.9807C52.1573 99.016 51.1312 99.0855 50.9605 99.0855C50.7897 99.0855 49.7637 99.016 47.9803 96.9807C46.2087 94.9587 44.2944 91.6296 42.5461 86.9118C41.4808 84.0373 40.5269 80.783 39.716 77.2151ZM30.2247 60.6592C30.4774 63.9276 30.8335 67.0935 31.2835 70.1309L4.0518 69.8604C2.7492 66.838 1.73702 63.6628 1.0501 60.3694L30.2247 60.6592ZM32.5348 77.1437L7.77795 76.8978C15.1122 88.4233 27.0458 96.7752 41.0181 99.4109C37.4682 94.3098 34.52 86.5622 32.5348 77.1437ZM92.6734 77.7411L69.3085 77.509C67.3523 86.6327 64.4884 94.162 61.0499 99.1975C74.2211 96.4177 85.4937 88.5393 92.6734 77.7411ZM70.5791 70.5213L96.5411 70.7792C97.9056 67.7815 98.982 64.6267 99.735 61.3498L71.6638 61.0709C71.4022 64.3335 71.0374 67.4923 70.5791 70.5213ZM100.824 54.3602L72.0581 54.0745C72.1142 52.379 72.1429 50.6622 72.1429 48.9273C72.1429 46.677 72.0947 44.4569 72.0009 42.2744L100.394 42.3557C100.793 44.8946 101 47.4967 101 50.1467C101 51.5658 100.941 52.971 100.824 54.3602ZM98.7659 35.351L71.5347 35.2731C71.2134 31.7364 70.7702 28.3289 70.2177 25.085L94.3897 25.3251C96.1972 28.4698 97.6718 31.8275 98.7659 35.351ZM64.5025 35.2529C64.1585 31.6609 63.6838 28.2346 63.0976 25.0143L38.8675 24.7736C38.2652 28.0406 37.778 31.522 37.4259 35.1754L64.5025 35.2529ZM64.9933 42.2544L36.9313 42.1741C36.8305 44.38 36.7781 46.6337 36.7781 48.9273C36.7781 50.5473 36.8042 52.1474 36.8551 53.7247L65.0566 54.0049C65.1136 52.3369 65.1429 50.6433 65.1429 48.9273C65.1429 46.6615 65.0918 44.4347 64.9933 42.2544ZM29.9253 42.154C29.8281 44.3753 29.7781 46.6356 29.7781 48.9273C29.7781 50.5193 29.8022 52.0961 29.8495 53.6552L0.101981 53.3596C0.0343356 52.2973 0 51.226 0 50.1467C0 47.3973 0.22283 44.6995 0.651536 42.0702L29.9253 42.154ZM30.397 35.1553L2.32068 35.075C3.50854 31.3271 5.12766 27.769 7.12027 24.4582L31.769 24.7031C31.1921 28.0252 30.7302 31.5218 30.397 35.1553ZM61.5641 17.9987L40.4115 17.7886C41.0561 15.3229 41.7717 13.0325 42.5461 10.9429C44.2944 6.22511 46.2087 2.89598 47.9803 0.874046C48.2706 0.542729 48.5408 0.263504 48.7906 0.0281898C49.3581 0.00944619 49.9279 0 50.5 0C51.3968 0 52.2882 0.0232145 53.1735 0.0690707C53.4112 0.295671 53.667 0.561712 53.9407 0.874046C55.7122 2.89598 57.6265 6.22511 59.3749 10.9429C60.1713 13.0918 60.9054 15.4529 61.5641 17.9987ZM68.7941 18.0705L89.491 18.2761C82.7279 10.1268 73.4242 4.13432 62.7833 1.49379C65.1808 5.85346 67.2299 11.5017 68.7941 18.0705ZM12.1596 17.5079L33.2118 17.717C34.7954 11.1729 36.8628 5.55831 39.2768 1.24284C28.534 3.66368 19.0921 9.48542 12.1596 17.5079Z"
                fill="#D8E5F1" />
            <path
                d="M98.6929 83.0698C98.6929 95.1684 88.8122 105 76.5941 105C64.3761 105 54.4954 95.1684 54.4954 83.0698C54.4954 70.9713 64.3761 61.1396 76.5941 61.1396C88.8122 61.1396 98.6929 70.9713 98.6929 83.0698Z"
                fill="#DFAC29" stroke="#C68628" stroke-width="4" />
            <path
                d="M86.4161 83.0699C86.4161 88.4356 82.0318 92.8093 76.594 92.8093C71.1562 92.8093 66.772 88.4356 66.772 83.0699C66.772 77.7042 71.1562 73.3306 76.594 73.3306C82.0318 73.3306 86.4161 77.7042 86.4161 83.0699Z"
                fill="#FFDB80" stroke="#FA9600" stroke-width="4" />
            <line y1="-2" x2="36.1325" y2="-2"
                transform="matrix(0.0251681 0.999683 -0.999692 0.0248175 70.6831 65.4609)" stroke="#FA9600"
                stroke-width="4" />
            <line y1="-2" x2="36.1325" y2="-2"
                transform="matrix(0.0251685 0.999683 -0.999692 0.0248171 79.7771 65.4609)" stroke="#FA9600"
                stroke-width="4" />
        </svg>
        <div class="cabeceratitulo">
            <h1>Economía a tu alcance</h1>
            <h2>Tecnologías para la educación</h2>
        </div>
    </header>
    <ul class="nav justify-content-center">
        <li class="nav-items">
            <a class="nav-link" href="{{ asset('/') }}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" />
                    <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                </svg></a>
        </li>
        <li class="nav-items">
            <a class="nav-link active" href="#temat1ica">Temáticas</a>
        </li>
        <li class="nav-items">
            <a class="nav-link" href="{{route('actividades')}}">Actividades</a>
        </li>
        <li class="nav-items">
            <a class="nav-link" href="{{route('album')}}">Álbum</a>
        </li>
        <li class="nav-items">
            <a class="nav-link" id="activarLogin" href="">Login</a>
        </li>
        <li class="nav-items">
            <a class="nav-link" href="{{route('contactos')}}">Contactos</a>
        </li>
    </ul>
    @yield('content')
    @yield('contentlist')
    @yield('contentactividades')
    @yield('contentalbum')
    @yield('contentcontactos')
    @yield('contentedit')
    <div class="obscurecer" id="obscurecer"></div>
    <div class="registrar" id="registrar">
        <img src="img/user.png" alt="">
        <form action="{{ url('/usuarios') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label for="nombre">{{ 'Nombre' }}</label>
            <input type="text" name="nombre" id="nombre" value=""><br>
            <label for="nickname">{{ 'NickName' }}</label>
            <input type="text" name="nickname" id="nickname" value=""><br>
            <label for="correo">{{ 'Correo' }}</label>
            <input type="email" name="correo" id="correo" value=""><br>
            <label for="pais">{{ 'Pais' }}</label>
            <input type="text" name="pais" id="pais" value=""><br>
            <label for="edad">{{ 'Edad' }}</label>
            <input type="number" name="edad" id="edad" value=""><br>
            <label for="contraseña">{{ 'Contraseña' }}</label>
            <input type="text" name="contraseña" id="contraseña" value="">
            <input type="submit" value="Agregar">
        </form>
    </div>
    <div class="login" id="login">
        <img src="img/user.png" alt="">
        <form action="{{ url('/usuarios') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label for="correo">{{ 'Correo' }}</label>
            <input type="email" name="correo" id="coreo" value="">
            {!! $errors->first('correo','<snap class="help-block">:message</snap>') !!}
            <label for="contraseña">{{ 'Contraseña' }}</label>
            <input type="text" name="contraseña" id="contraseña" value="">
            {!! $errors->first('contraseña','<snap class="help-block">:message</snap>') !!}
            <a class="nav-link" id="activarRegistro" href="">¿Eres nuevo? Registrate</a>
            <input type="submit" value="Acceder">
        </form>
    </div>
    
    <footer>
        <section>
            <article>
                <p>Derechos Reservados UTPL 2020</p>
                <img src="{{ asset('img/logo-utpl.png') }}">
            </article>
            <article>
                <a href="">Mapa del sitio</a>
            </article>
            <article>
                <p class="fp">
                    Contactos<br>
                    <a href="">utpl.edu.ec</a><br>
                    Teléfono: (+593) 07 3701444 ext. 2510
                </p>
            </article>
        </section>
    </footer>
</body>

</html>