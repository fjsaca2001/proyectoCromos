<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!--Archivos de javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
    <!-- JavaScript Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
        </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/animation.js') }}" type="text/javascript"></script>
    <title>@yield('titulo')</title>
</head>

<body>
    <header>
        <ul class="nav justify-content-center">
            <li class="nav-items" id="navItemLogo">
                <svg class="logo" width="100px" hei viewBox="0 0 101 107" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M64.6461 61.0012C64.3704 64.2917 63.9856 67.4515 63.5058 70.451L38.3755 70.2014C37.9011 67.1935 37.5219 64.0262 37.2523 60.729L64.6461 61.0012ZM39.716 77.2151L62.154 77.438C61.3542 80.9187 60.4179 84.0973 59.3749 86.9118C57.6265 91.6296 55.7122 94.9587 53.9407 96.9807C52.1573 99.016 51.1312 99.0855 50.9605 99.0855C50.7897 99.0855 49.7637 99.016 47.9803 96.9807C46.2087 94.9587 44.2944 91.6296 42.5461 86.9118C41.4808 84.0373 40.5269 80.783 39.716 77.2151ZM30.2247 60.6592C30.4774 63.9276 30.8335 67.0935 31.2835 70.1309L4.0518 69.8604C2.7492 66.838 1.73702 63.6628 1.0501 60.3694L30.2247 60.6592ZM32.5348 77.1437L7.77795 76.8978C15.1122 88.4233 27.0458 96.7752 41.0181 99.4109C37.4682 94.3098 34.52 86.5622 32.5348 77.1437ZM92.6734 77.7411L69.3085 77.509C67.3523 86.6327 64.4884 94.162 61.0499 99.1975C74.2211 96.4177 85.4937 88.5393 92.6734 77.7411ZM70.5791 70.5213L96.5411 70.7792C97.9056 67.7815 98.982 64.6267 99.735 61.3498L71.6638 61.0709C71.4022 64.3335 71.0374 67.4923 70.5791 70.5213ZM100.824 54.3602L72.0581 54.0745C72.1142 52.379 72.1429 50.6622 72.1429 48.9273C72.1429 46.677 72.0947 44.4569 72.0009 42.2744L100.394 42.3557C100.793 44.8946 101 47.4967 101 50.1467C101 51.5658 100.941 52.971 100.824 54.3602ZM98.7659 35.351L71.5347 35.2731C71.2134 31.7364 70.7702 28.3289 70.2177 25.085L94.3897 25.3251C96.1972 28.4698 97.6718 31.8275 98.7659 35.351ZM64.5025 35.2529C64.1585 31.6609 63.6838 28.2346 63.0976 25.0143L38.8675 24.7736C38.2652 28.0406 37.778 31.522 37.4259 35.1754L64.5025 35.2529ZM64.9933 42.2544L36.9313 42.1741C36.8305 44.38 36.7781 46.6337 36.7781 48.9273C36.7781 50.5473 36.8042 52.1474 36.8551 53.7247L65.0566 54.0049C65.1136 52.3369 65.1429 50.6433 65.1429 48.9273C65.1429 46.6615 65.0918 44.4347 64.9933 42.2544ZM29.9253 42.154C29.8281 44.3753 29.7781 46.6356 29.7781 48.9273C29.7781 50.5193 29.8022 52.0961 29.8495 53.6552L0.101981 53.3596C0.0343356 52.2973 0 51.226 0 50.1467C0 47.3973 0.22283 44.6995 0.651536 42.0702L29.9253 42.154ZM30.397 35.1553L2.32068 35.075C3.50854 31.3271 5.12766 27.769 7.12027 24.4582L31.769 24.7031C31.1921 28.0252 30.7302 31.5218 30.397 35.1553ZM61.5641 17.9987L40.4115 17.7886C41.0561 15.3229 41.7717 13.0325 42.5461 10.9429C44.2944 6.22511 46.2087 2.89598 47.9803 0.874046C48.2706 0.542729 48.5408 0.263504 48.7906 0.0281898C49.3581 0.00944619 49.9279 0 50.5 0C51.3968 0 52.2882 0.0232145 53.1735 0.0690707C53.4112 0.295671 53.667 0.561712 53.9407 0.874046C55.7122 2.89598 57.6265 6.22511 59.3749 10.9429C60.1713 13.0918 60.9054 15.4529 61.5641 17.9987ZM68.7941 18.0705L89.491 18.2761C82.7279 10.1268 73.4242 4.13432 62.7833 1.49379C65.1808 5.85346 67.2299 11.5017 68.7941 18.0705ZM12.1596 17.5079L33.2118 17.717C34.7954 11.1729 36.8628 5.55831 39.2768 1.24284C28.534 3.66368 19.0921 9.48542 12.1596 17.5079Z"
                        fill="#2b4ee9" />
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
                    <h1>EconoCromos</h1>
                </div>
            </li>
            <li class="nav-items">
                <a class="nav-link" href="{{ asset('/home') }}"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                        height="20" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" />
                        <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                    </svg>
                </a>
            </li>
            <li class="nav-items">
                <a class="nav-link" href="{{ url('actividades') }}">Actividades</a>
            </li>

            @guest
            <li class="nav-items">
                <a class="nav-link" id="activarLogin" href="#">Login</a>
            </li>

            @else

            <li class="nav-items">
                <a class="nav-link" href="{{ route('album') }}">Álbumes</a>
            </li>
            <li class="nav-items">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="desplegable" href="#">
                    {{ auth()->user()->nickname }} </a>
                <div class="dropdown-menu">
                    @if (Gate::allows('acciones-admin'))
                    <a class="nav-link" href="{{ url('usuarios') }}">Administración </a>
                    @elseif (Gate::allows('acciones-super'))
                    <a class="nav-link" href="{{ url('agregarCromo') }}">Administración </a>
                    @endif
                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        data-bs-whatever="@mdo">Editar perfil</a>
                    <a class="nav-link" href="#" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">Cerrar
                        sesión
                    </a>
                </div>
            </li>
            @endguest
            <li class="nav-items">
                <a class="nav-link" href="{{ route('contactos') }}">Contactos</a>
            </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    </header>
    @yield('content')
    @yield('contentlist')
    @yield('contentactividades')
    @yield('contentalbum')
    @yield('contentcontactos')
    @yield('contentedit')
    @yield('contentperfil')
    @yield('contentRegister')
    @yield('contentlogin')

    <div class="obscurecer" id="obscurecer"></div>

    <div class="login" id="login">
        <img src="img/user.png" alt="">
        <p><b>Hola, que gusto verte de nuevo...</b> <br> Por favor ingresa tus datos a continuación</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            {{ csrf_field() }}
            <label for="email" class="">{{ __('Correo electrónico') }}</label>
            <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="password" class="">{{ __('Contraseña') }}</label>
            <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password"
                required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
            <button type="submit" class="btn btn-primary">
                {{ __('Ingresar') }}
            </button><br>
            <a class="btn btn-link" id="activarRegistro" href="">
                {{ __('¿Eres Nuevo? Registrate') }}
            </a>
        </form>
    </div>

    <div class="registrar" id="registrar">
        <img src="img/user2.png" alt="">
        <p><b>¿¡Cómo que no estabas registrado!?</b> <br> Únete, no sabes de lo que te estabas perdiendo</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            {{ csrf_field() }}
            <label for="nombre" class="">{{ __('Nombre') }}</label>
            <input id="nombre" type="text" class=" @error('nombre') is-invalid @enderror" name="nombre"
                value="{{ old('nombre') }}" required autocomplete="nombre" maxlength="70">
            @error('nombre')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="nickname" class="">{{ __('Alias') }}</label>
            <input id="nickname" type="text" class=" @error('nickname') is-invalid @enderror" name="nickname"
                value="{{ old('nickname') }}" required autocomplete="nickname" maxlength="20">
            @error('nickname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="email" class="">{{ __('Correo') }}</label>
            <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" maxlength="100">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="pais" class="">{{ __('País') }}</label>
            <select name="pais" id="pais" class=" @error('pais') is-invalid @enderror" required autocomplete="pais"
                autofocus>
                <option value="Ecuador" id="AF">Ecuador</option>
                <option value="Afganistán" id="AF">Afganistán</option>
                <option value="Albania" id="AL">Albania</option>
                <option value="Alemania" id="DE">Alemania</option>
                <option value="Andorra" id="AD">Andorra</option>
                <option value="Angola" id="AO">Angola</option>
                <option value="Anguila" id="AI">Anguila</option>
                <option value="Antártida" id="AQ">Antártida</option>
                <option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
                <option value="Antillas holandesas" id="AN">Antillas holandesas</option>
                <option value="Arabia Saudí" id="SA">Arabia Saudí</option>
                <option value="Argelia" id="DZ">Argelia</option>
                <option value="Argentina" id="AR">Argentina</option>
                <option value="Armenia" id="AM">Armenia</option>
                <option value="Aruba" id="AW">Aruba</option>
                <option value="Australia" id="AU">Australia</option>
                <option value="Austria" id="AT">Austria</option>
                <option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
                <option value="Bahamas" id="BS">Bahamas</option>
                <option value="Bahrein" id="BH">Bahrein</option>
                <option value="Bangladesh" id="BD">Bangladesh</option>
                <option value="Barbados" id="BB">Barbados</option>
                <option value="Bélgica" id="BE">Bélgica</option>
                <option value="Belice" id="BZ">Belice</option>
                <option value="Benín" id="BJ">Benín</option>
                <option value="Bermudas" id="BM">Bermudas</option>
                <option value="Bhután" id="BT">Bhután</option>
                <option value="Bielorrusia" id="BY">Bielorrusia</option>
                <option value="Birmania" id="MM">Birmania</option>
                <option value="Bolivia" id="BO">Bolivia</option>
                <option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
                <option value="Botsuana" id="BW">Botsuana</option>
                <option value="Brasil" id="BR">Brasil</option>
                <option value="Brunei" id="BN">Brunei</option>
                <option value="Bulgaria" id="BG">Bulgaria</option>
                <option value="Burkina Faso" id="BF">Burkina Faso</option>
                <option value="Burundi" id="BI">Burundi</option>
                <option value="Cabo Verde" id="CV">Cabo Verde</option>
                <option value="Camboya" id="KH">Camboya</option>
                <option value="Camerún" id="CM">Camerún</option>
                <option value="Canadá" id="CA">Canadá</option>
                <option value="Chad" id="TD">Chad</option>
                <option value="Chile" id="CL">Chile</option>
                <option value="China" id="CN">China</option>
                <option value="Chipre" id="CY">Chipre</option>
                <option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del Vaticano</option>
                <option value="Colombia" id="CO">Colombia</option>
                <option value="Comores" id="KM">Comores</option>
                <option value="Congo" id="CG">Congo</option>
                <option value="Corea" id="KR">Corea</option>
                <option value="Corea del Norte" id="KP">Corea del Norte</option>
                <option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
                <option value="Costa Rica" id="CR">Costa Rica</option>
                <option value="Croacia" id="HR">Croacia</option>
                <option value="Cuba" id="CU">Cuba</option>
                <option value="Dinamarca" id="DK">Dinamarca</option>
                <option value="Djibouri" id="DJ">Djibouri</option>
                <option value="Dominica" id="DM">Dominica</option>
                <option value="Ecuador" id="EC">Ecuador</option>
                <option value="Egipto" id="EG">Egipto</option>
                <option value="El Salvador" id="SV">El Salvador</option>
                <option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos</option>
                <option value="Eritrea" id="ER">Eritrea</option>
                <option value="Eslovaquia" id="SK">Eslovaquia</option>
                <option value="Eslovenia" id="SI">Eslovenia</option>
                <option value="España" id="ES">España</option>
                <option value="Estados Unidos" id="US">Estados Unidos</option>
                <option value="Estonia" id="EE">Estonia</option>
                <option value="c" id="ET">Etiopía</option>
                <option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava de Macedonia</option>
                <option value="Filipinas" id="PH">Filipinas</option>
                <option value="Finlandia" id="FI">Finlandia</option>
                <option value="Francia" id="FR">Francia</option>
                <option value="Gabón" id="GA">Gabón</option>
                <option value="Gambia" id="GM">Gambia</option>
                <option value="Georgia" id="GE">Georgia</option>
                <option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia del Sur y las islas
                    Sandwich del Sur</option>
                <option value="Ghana" id="GH">Ghana</option>
                <option value="Gibraltar" id="GI">Gibraltar</option>
                <option value="Granada" id="GD">Granada</option>
                <option value="Grecia" id="GR">Grecia</option>
                <option value="Groenlandia" id="GL">Groenlandia</option>
                <option value="Guadalupe" id="GP">Guadalupe</option>
                <option value="Guam" id="GU">Guam</option>
                <option value="Guatemala" id="GT">Guatemala</option>
                <option value="Guayana" id="GY">Guayana</option>
                <option value="Guayana francesa" id="GF">Guayana francesa</option>
                <option value="Guinea" id="GN">Guinea</option>
                <option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
                <option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
                <option value="Haití" id="HT">Haití</option>
                <option value="Holanda" id="NL">Holanda</option>
                <option value="Honduras" id="HN">Honduras</option>
                <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
                <option value="Hungría" id="HU">Hungría</option>
                <option value="India" id="IN">India</option>
                <option value="Indonesia" id="ID">Indonesia</option>
                <option value="Irak" id="IQ">Irak</option>
                <option value="Irán" id="IR">Irán</option>
                <option value="Irlanda" id="IE">Irlanda</option>
                <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
                <option value="Isla Christmas" id="CX">Isla Christmas</option>
                <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
                <option value="Islandia" id="IS">Islandia</option>
                <option value="Islas Caimán" id="KY">Islas Caimán</option>
                <option value="Islas Cook" id="CK">Islas Cook</option>
                <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
                <option value="Islas Faroe" id="FO">Islas Faroe</option>
                <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
                <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
                <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
                <option value="Islas Marshall" id="MH">Islas Marshall</option>
                <option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
                <option value="Islas Palau" id="PW">Islas Palau</option>
                <option value="Islas Salomón" d="SB">Islas Salomón</option>
                <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
                <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
                <option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
                <option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido</option>
                <option value="Israel" id="IL">Israel</option>
                <option value="Italia" id="IT">Italia</option>
                <option value="Jamaica" id="JM">Jamaica</option>
                <option value="Japón" id="JP">Japón</option>
                <option value="Jordania" id="JO">Jordania</option>
                <option value="Kazajistán" id="KZ">Kazajistán</option>
                <option value="Kenia" id="KE">Kenia</option>
                <option value="Kirguizistán" id="KG">Kirguizistán</option>
                <option value="Kiribati" id="KI">Kiribati</option>
                <option value="Kuwait" id="KW">Kuwait</option>
                <option value="Laos" id="LA">Laos</option>
                <option value="Lesoto" id="LS">Lesoto</option>
                <option value="Letonia" id="LV">Letonia</option>
                <option value="Líbano" id="LB">Líbano</option>
                <option value="Liberia" id="LR">Liberia</option>
                <option value="Libia" id="LY">Libia</option>
                <option value="Liechtenstein" id="LI">Liechtenstein</option>
                <option value="Lituania" id="LT">Lituania</option>
                <option value="Luxemburgo" id="LU">Luxemburgo</option>
                <option value="Macao R. A. E" id="MO">Macao R. A. E</option>
                <option value="Madagascar" id="MG">Madagascar</option>
                <option value="Malasia" id="MY">Malasia</option>
                <option value="Malawi" id="MW">Malawi</option>
                <option value="Maldivas" id="MV">Maldivas</option>
                <option value="Malí" id="ML">Malí</option>
                <option value="Malta" id="MT">Malta</option>
                <option value="Marruecos" id="MA">Marruecos</option>
                <option value="Martinica" id="MQ">Martinica</option>
                <option value="Mauricio" id="MU">Mauricio</option>
                <option value="Mauritania" id="MR">Mauritania</option>
                <option value="Mayotte" id="YT">Mayotte</option>
                <option value="México" id="MX">México</option>
                <option value="Micronesia" id="FM">Micronesia</option>
                <option value="Moldavia" id="MD">Moldavia</option>
                <option value="Mónaco" id="MC">Mónaco</option>
                <option value="Mongolia" id="MN">Mongolia</option>
                <option value="Montserrat" id="MS">Montserrat</option>
                <option value="Mozambique" id="MZ">Mozambique</option>
                <option value="Namibia" id="NA">Namibia</option>
                <option value="Nauru" id="NR">Nauru</option>
                <option value="Nepal" id="NP">Nepal</option>
                <option value="Nicaragua" id="NI">Nicaragua</option>
                <option value="Níger" id="NE">Níger</option>
                <option value="Nigeria" id="NG">Nigeria</option>
                <option value="Niue" id="NU">Niue</option>
                <option value="Norfolk" id="NF">Norfolk</option>
                <option value="Noruega" id="NO">Noruega</option>
                <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
                <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
                <option value="Omán" id="OM">Omán</option>
                <option value="Panamá" id="PA">Panamá</option>
                <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
                <option value="Paquistán" id="PK">Paquistán</option>
                <option value="Paraguay" id="PY">Paraguay</option>
                <option value="Perú" id="PE">Perú</option>
                <option value="Pitcairn" id="PN">Pitcairn</option>
                <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
                <option value="Polonia" id="PL">Polonia</option>
                <option value="Portugal" id="PT">Portugal</option>
                <option value="Puerto Rico" id="PR">Puerto Rico</option>
                <option value="Qatar" id="QA">Qatar</option>
                <option value="Reino Unido" id="UK">Reino Unido</option>
                <option value="República Centroafricana" id="CF">República Centroafricana</option>
                <option value="República Checa" id="CZ">República Checa</option>
                <option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
                <option value="República Democrática del Congo Zaire" id="CD">República Democrática del Congo Zaire
                </option>
                <option value="República Dominicana" id="DO">República Dominicana</option>
                <option value="Reunión" id="RE">Reunión</option>
                <option value="Ruanda" id="RW">Ruanda</option>
                <option value="Rumania" id="RO">Rumania</option>
                <option value="Rusia" id="RU">Rusia</option>
                <option value="Samoa" id="WS">Samoa</option>
                <option value="Samoa occidental" id="AS">Samoa occidental</option>
                <option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
                <option value="San Marino" id="SM">San Marino</option>
                <option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
                <option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas Granadinas</option>
                <option value="Santa Helena" id="SH">Santa Helena</option>
                <option value="Santa Lucía" id="LC">Santa Lucía</option>
                <option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
                <option value="Senegal" id="SN">Senegal</option>
                <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
                <option value="Sychelles" id="SC">Seychelles</option>
                <option value="Sierra Leona" id="SL">Sierra Leona</option>
                <option value="Singapur" id="SG">Singapur</option>
                <option value="Siria" id="SY">Siria</option>
                <option value="Somalia" id="SO">Somalia</option>
                <option value="Sri Lanka" id="LK">Sri Lanka</option>
                <option value="Suazilandia" id="SZ">Suazilandia</option>
                <option value="Sudán" id="SD">Sudán</option>
                <option value="Suecia" id="SE">Suecia</option>
                <option value="Suiza" id="CH">Suiza</option>
                <option value="Surinam" id="SR">Surinam</option>
                <option value="Svalbard" id="SJ">Svalbard</option>
                <option value="Tailandia" id="TH">Tailandia</option>
                <option value="Taiwán" id="TW">Taiwán</option>
                <option value="Tanzania" id="TZ">Tanzania</option>
                <option value="Tayikistán" id="TJ">Tayikistán</option>
                <option value="Territorios británicos del océano Indico" id="IO">Territorios británicos del océano
                    Indico</option>
                <option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
                <option value="Timor Oriental" id="TP">Timor Oriental</option>
                <option value="Togo" id="TG">Togo</option>
                <option value="Tonga" id="TO">Tonga</option>
                <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
                <option value="Túnez" id="TN">Túnez</option>
                <option value="Turkmenistán" id="TM">Turkmenistán</option>
                <option value="Turquía" id="TR">Turquía</option>
                <option value="Tuvalu" id="TV">Tuvalu</option>
                <option value="Ucrania" id="UA">Ucrania</option>
                <option value="Uganda" id="UG">Uganda</option>
                <option value="Uruguay" id="UY">Uruguay</option>
                <option value="Uzbekistán" id="UZ">Uzbekistán</option>
                <option value="Vanuatu" id="VU">Vanuatu</option>
                <option value="Venezuela" id="VE">Venezuela</option>
                <option value="Vietnam" id="VN">Vietnam</option>
                <option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
                <option value="Yemen" id="YE">Yemen</option>
                <option value="Zambia" id="ZM">Zambia</option>
                <option value="Zimbabue" id="ZW">Zimbabue</option>
            </select>
            @error('pais')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="edad" class="">{{ __('Edad') }}</label>
            <input id="edad" type="number" class=" @error('edad') is-invalid @enderror" name="edad"
                value="{{ old('edad') }}" required autocomplete="edad" min="5" max="110">
            @error('edad')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="password" class="">{{ __('Contraseña') }}</label>
            <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password"
                required autocomplete="password" minlength="8">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror <br>
            <button type="submit" class="btn btn-primary">
                {{ __('Registrar') }}
            </button>
        </form>
    </div>


    <!-- Ventana emergente -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualización de datos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (auth()->user())
                    <form method="POST" action="{{ url('/usuarios/' . auth()->user()->idUsuario) }}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <!-- Campo para cambiar el nombre de usuario -->
                        <div class="mb-3">
                            <label for="nombre" class="col-form-label">{{ __('Nombre') }}</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                value="{{ auth()->user()->nombre }}" required autocomplete="nombre" maxlength="30">
                            @error('nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Campo para cambiar el nickname del usuario -->
                        <div class="mb-3">
                            <label for="nickname" class="col-form-label">{{ __('Alias') }}</label>
                            <input type="text" class="form-control" id="nickname" name="nickname"
                                value="{{ auth()->user()->nickname }}" required autocomplete="nickname" maxlength="30">
                            @error('nickname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Campo para cambiar el pais del usuario -->
                        <div class="mb-3">
                            <label for="pais" class="col-form-label">{{ __('País') }}</label>
                            <select name="pais" id="pais" class="form-control @error('pais') is-invalid @enderror"
                                value="{{ auth()->user()->pais }}" required autocomplete="pais" autofocus>
                                <option value="Ecuador" id="AF">Ecuador</option>
                                <option value="Afganistán" id="AF">Afganistán</option>
                                <option value="Albania" id="AL">Albania</option>
                                <option value="Alemania" id="DE">Alemania</option>
                                <option value="Andorra" id="AD">Andorra</option>
                                <option value="Angola" id="AO">Angola</option>
                                <option value="Anguila" id="AI">Anguila</option>
                                <option value="Antártida" id="AQ">Antártida</option>
                                <option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
                                <option value="Antillas holandesas" id="AN">Antillas holandesas</option>
                                <option value="Arabia Saudí" id="SA">Arabia Saudí</option>
                                <option value="Argelia" id="DZ">Argelia</option>
                                <option value="Argentina" id="AR">Argentina</option>
                                <option value="Armenia" id="AM">Armenia</option>
                                <option value="Aruba" id="AW">Aruba</option>
                                <option value="Australia" id="AU">Australia</option>
                                <option value="Austria" id="AT">Austria</option>
                                <option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
                                <option value="Bahamas" id="BS">Bahamas</option>
                                <option value="Bahrein" id="BH">Bahrein</option>
                                <option value="Bangladesh" id="BD">Bangladesh</option>
                                <option value="Barbados" id="BB">Barbados</option>
                                <option value="Bélgica" id="BE">Bélgica</option>
                                <option value="Belice" id="BZ">Belice</option>
                                <option value="Benín" id="BJ">Benín</option>
                                <option value="Bermudas" id="BM">Bermudas</option>
                                <option value="Bhután" id="BT">Bhután</option>
                                <option value="Bielorrusia" id="BY">Bielorrusia</option>
                                <option value="Birmania" id="MM">Birmania</option>
                                <option value="Bolivia" id="BO">Bolivia</option>
                                <option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
                                <option value="Botsuana" id="BW">Botsuana</option>
                                <option value="Brasil" id="BR">Brasil</option>
                                <option value="Brunei" id="BN">Brunei</option>
                                <option value="Bulgaria" id="BG">Bulgaria</option>
                                <option value="Burkina Faso" id="BF">Burkina Faso</option>
                                <option value="Burundi" id="BI">Burundi</option>
                                <option value="Cabo Verde" id="CV">Cabo Verde</option>
                                <option value="Camboya" id="KH">Camboya</option>
                                <option value="Camerún" id="CM">Camerún</option>
                                <option value="Canadá" id="CA">Canadá</option>
                                <option value="Chad" id="TD">Chad</option>
                                <option value="Chile" id="CL">Chile</option>
                                <option value="China" id="CN">China</option>
                                <option value="Chipre" id="CY">Chipre</option>
                                <option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del Vaticano
                                </option>
                                <option value="Colombia" id="CO">Colombia</option>
                                <option value="Comores" id="KM">Comores</option>
                                <option value="Congo" id="CG">Congo</option>
                                <option value="Corea" id="KR">Corea</option>
                                <option value="Corea del Norte" id="KP">Corea del Norte</option>
                                <option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
                                <option value="Costa Rica" id="CR">Costa Rica</option>
                                <option value="Croacia" id="HR">Croacia</option>
                                <option value="Cuba" id="CU">Cuba</option>
                                <option value="Dinamarca" id="DK">Dinamarca</option>
                                <option value="Djibouri" id="DJ">Djibouri</option>
                                <option value="Dominica" id="DM">Dominica</option>
                                <option value="Ecuador" id="EC">Ecuador</option>
                                <option value="Egipto" id="EG">Egipto</option>
                                <option value="El Salvador" id="SV">El Salvador</option>
                                <option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos</option>
                                <option value="Eritrea" id="ER">Eritrea</option>
                                <option value="Eslovaquia" id="SK">Eslovaquia</option>
                                <option value="Eslovenia" id="SI">Eslovenia</option>
                                <option value="España" id="ES">España</option>
                                <option value="Estados Unidos" id="US">Estados Unidos</option>
                                <option value="Estonia" id="EE">Estonia</option>
                                <option value="c" id="ET">Etiopía</option>
                                <option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava
                                    de Macedonia</option>
                                <option value="Filipinas" id="PH">Filipinas</option>
                                <option value="Finlandia" id="FI">Finlandia</option>
                                <option value="Francia" id="FR">Francia</option>
                                <option value="Gabón" id="GA">Gabón</option>
                                <option value="Gambia" id="GM">Gambia</option>
                                <option value="Georgia" id="GE">Georgia</option>
                                <option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia del Sur
                                    y las islas
                                    Sandwich del Sur</option>
                                <option value="Ghana" id="GH">Ghana</option>
                                <option value="Gibraltar" id="GI">Gibraltar</option>
                                <option value="Granada" id="GD">Granada</option>
                                <option value="Grecia" id="GR">Grecia</option>
                                <option value="Groenlandia" id="GL">Groenlandia</option>
                                <option value="Guadalupe" id="GP">Guadalupe</option>
                                <option value="Guam" id="GU">Guam</option>
                                <option value="Guatemala" id="GT">Guatemala</option>
                                <option value="Guayana" id="GY">Guayana</option>
                                <option value="Guayana francesa" id="GF">Guayana francesa</option>
                                <option value="Guinea" id="GN">Guinea</option>
                                <option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
                                <option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
                                <option value="Haití" id="HT">Haití</option>
                                <option value="Holanda" id="NL">Holanda</option>
                                <option value="Honduras" id="HN">Honduras</option>
                                <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
                                <option value="Hungría" id="HU">Hungría</option>
                                <option value="India" id="IN">India</option>
                                <option value="Indonesia" id="ID">Indonesia</option>
                                <option value="Irak" id="IQ">Irak</option>
                                <option value="Irán" id="IR">Irán</option>
                                <option value="Irlanda" id="IE">Irlanda</option>
                                <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
                                <option value="Isla Christmas" id="CX">Isla Christmas</option>
                                <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald
                                </option>
                                <option value="Islandia" id="IS">Islandia</option>
                                <option value="Islas Caimán" id="KY">Islas Caimán</option>
                                <option value="Islas Cook" id="CK">Islas Cook</option>
                                <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
                                <option value="Islas Faroe" id="FO">Islas Faroe</option>
                                <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
                                <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland
                                </option>
                                <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
                                <option value="Islas Marshall" id="MH">Islas Marshall</option>
                                <option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados
                                    Unidos</option>
                                <option value="Islas Palau" id="PW">Islas Palau</option>
                                <option value="Islas Salomón" d="SB">Islas Salomón</option>
                                <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
                                <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
                                <option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
                                <option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido
                                </option>
                                <option value="Israel" id="IL">Israel</option>
                                <option value="Italia" id="IT">Italia</option>
                                <option value="Jamaica" id="JM">Jamaica</option>
                                <option value="Japón" id="JP">Japón</option>
                                <option value="Jordania" id="JO">Jordania</option>
                                <option value="Kazajistán" id="KZ">Kazajistán</option>
                                <option value="Kenia" id="KE">Kenia</option>
                                <option value="Kirguizistán" id="KG">Kirguizistán</option>
                                <option value="Kiribati" id="KI">Kiribati</option>
                                <option value="Kuwait" id="KW">Kuwait</option>
                                <option value="Laos" id="LA">Laos</option>
                                <option value="Lesoto" id="LS">Lesoto</option>
                                <option value="Letonia" id="LV">Letonia</option>
                                <option value="Líbano" id="LB">Líbano</option>
                                <option value="Liberia" id="LR">Liberia</option>
                                <option value="Libia" id="LY">Libia</option>
                                <option value="Liechtenstein" id="LI">Liechtenstein</option>
                                <option value="Lituania" id="LT">Lituania</option>
                                <option value="Luxemburgo" id="LU">Luxemburgo</option>
                                <option value="Macao R. A. E" id="MO">Macao R. A. E</option>
                                <option value="Madagascar" id="MG">Madagascar</option>
                                <option value="Malasia" id="MY">Malasia</option>
                                <option value="Malawi" id="MW">Malawi</option>
                                <option value="Maldivas" id="MV">Maldivas</option>
                                <option value="Malí" id="ML">Malí</option>
                                <option value="Malta" id="MT">Malta</option>
                                <option value="Marruecos" id="MA">Marruecos</option>
                                <option value="Martinica" id="MQ">Martinica</option>
                                <option value="Mauricio" id="MU">Mauricio</option>
                                <option value="Mauritania" id="MR">Mauritania</option>
                                <option value="Mayotte" id="YT">Mayotte</option>
                                <option value="México" id="MX">México</option>
                                <option value="Micronesia" id="FM">Micronesia</option>
                                <option value="Moldavia" id="MD">Moldavia</option>
                                <option value="Mónaco" id="MC">Mónaco</option>
                                <option value="Mongolia" id="MN">Mongolia</option>
                                <option value="Montserrat" id="MS">Montserrat</option>
                                <option value="Mozambique" id="MZ">Mozambique</option>
                                <option value="Namibia" id="NA">Namibia</option>
                                <option value="Nauru" id="NR">Nauru</option>
                                <option value="Nepal" id="NP">Nepal</option>
                                <option value="Nicaragua" id="NI">Nicaragua</option>
                                <option value="Níger" id="NE">Níger</option>
                                <option value="Nigeria" id="NG">Nigeria</option>
                                <option value="Niue" id="NU">Niue</option>
                                <option value="Norfolk" id="NF">Norfolk</option>
                                <option value="Noruega" id="NO">Noruega</option>
                                <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
                                <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
                                <option value="Omán" id="OM">Omán</option>
                                <option value="Panamá" id="PA">Panamá</option>
                                <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
                                <option value="Paquistán" id="PK">Paquistán</option>
                                <option value="Paraguay" id="PY">Paraguay</option>
                                <option value="Perú" id="PE">Perú</option>
                                <option value="Pitcairn" id="PN">Pitcairn</option>
                                <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
                                <option value="Polonia" id="PL">Polonia</option>
                                <option value="Portugal" id="PT">Portugal</option>
                                <option value="Puerto Rico" id="PR">Puerto Rico</option>
                                <option value="Qatar" id="QA">Qatar</option>
                                <option value="Reino Unido" id="UK">Reino Unido</option>
                                <option value="República Centroafricana" id="CF">República Centroafricana</option>
                                <option value="República Checa" id="CZ">República Checa</option>
                                <option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
                                <option value="República Democrática del Congo Zaire" id="CD">República Democrática
                                    del Congo Zaire
                                </option>
                                <option value="República Dominicana" id="DO">República Dominicana</option>
                                <option value="Reunión" id="RE">Reunión</option>
                                <option value="Ruanda" id="RW">Ruanda</option>
                                <option value="Rumania" id="RO">Rumania</option>
                                <option value="Rusia" id="RU">Rusia</option>
                                <option value="Samoa" id="WS">Samoa</option>
                                <option value="Samoa occidental" id="AS">Samoa occidental</option>
                                <option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
                                <option value="San Marino" id="SM">San Marino</option>
                                <option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
                                <option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas
                                    Granadinas</option>
                                <option value="Santa Helena" id="SH">Santa Helena</option>
                                <option value="Santa Lucía" id="LC">Santa Lucía</option>
                                <option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
                                <option value="Senegal" id="SN">Senegal</option>
                                <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
                                <option value="Sychelles" id="SC">Seychelles</option>
                                <option value="Sierra Leona" id="SL">Sierra Leona</option>
                                <option value="Singapur" id="SG">Singapur</option>
                                <option value="Siria" id="SY">Siria</option>
                                <option value="Somalia" id="SO">Somalia</option>
                                <option value="Sri Lanka" id="LK">Sri Lanka</option>
                                <option value="Suazilandia" id="SZ">Suazilandia</option>
                                <option value="Sudán" id="SD">Sudán</option>
                                <option value="Suecia" id="SE">Suecia</option>
                                <option value="Suiza" id="CH">Suiza</option>
                                <option value="Surinam" id="SR">Surinam</option>
                                <option value="Svalbard" id="SJ">Svalbard</option>
                                <option value="Tailandia" id="TH">Tailandia</option>
                                <option value="Taiwán" id="TW">Taiwán</option>
                                <option value="Tanzania" id="TZ">Tanzania</option>
                                <option value="Tayikistán" id="TJ">Tayikistán</option>
                                <option value="Territorios británicos del océano Indico" id="IO">Territorios
                                    británicos del océano
                                    Indico</option>
                                <option value="Territorios franceses del sur" id="TF">Territorios franceses del sur
                                </option>
                                <option value="Timor Oriental" id="TP">Timor Oriental</option>
                                <option value="Togo" id="TG">Togo</option>
                                <option value="Tonga" id="TO">Tonga</option>
                                <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
                                <option value="Túnez" id="TN">Túnez</option>
                                <option value="Turkmenistán" id="TM">Turkmenistán</option>
                                <option value="Turquía" id="TR">Turquía</option>
                                <option value="Tuvalu" id="TV">Tuvalu</option>
                                <option value="Ucrania" id="UA">Ucrania</option>
                                <option value="Uganda" id="UG">Uganda</option>
                                <option value="Uruguay" id="UY">Uruguay</option>
                                <option value="Uzbekistán" id="UZ">Uzbekistán</option>
                                <option value="Vanuatu" id="VU">Vanuatu</option>
                                <option value="Venezuela" id="VE">Venezuela</option>
                                <option value="Vietnam" id="VN">Vietnam</option>
                                <option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
                                <option value="Yemen" id="YE">Yemen</option>
                                <option value="Zambia" id="ZM">Zambia</option>
                                <option value="Zimbabue" id="ZW">Zimbabue</option>
                            </select>
                            @error('pais')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Campo para cambiar la edad del usuario -->
                        <div class="mb-3">
                            <label for="edad" class="col-form-label">{{ __('Edad') }}</label>
                            <input type="number" class="form-control" id="edad" name="edad"
                                value="{{ auth()->user()->edad }}" required autocomplete="edad" max="60">
                            @error('edad')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Botón interno para modificar el usuario -->
                        <div class="mb-3 text-center">
                            <button type="submit" id="modificarDatosUsaurio" class="btn btn-primary">{{ __('Modificar
                                usuario') }}</button>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('modificarDatosUsaurio').onclick = function () {
            alert('Se modificaran los datos');
        }
    </script>

    <footer>
        <section>
            <article>
                <img src="{{ asset('img/logo-utpl.png') }}"><br><br>
                <p style="font-size: 15px"><img src="{{ asset('img/cc.png')}}" style="width: 18px" alt=""> Derechos
                    Reservados UTPL @2020</p>

            </article>
            <article>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.1625784740722!2d-79.20152538524027!3d-3.9869566971004433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cb47fe833955bd%3A0xfd3e8617b7393995!2sUniversidad%20T%C3%A9cnica%20Particular%20de%20Loja!5e0!3m2!1ses-419!2sec!4v1611904965225!5m2!1ses-419!2sec"
                    width="250" height="100" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </article>
            <article>
                <p class="fp">
                    Visitanos en <a href="">utpl.edu.ec</a><br>
                    Teléfono: (+593) 1054276
                </p>
            </article>
        </section>
    </footer>
</body>

</html>