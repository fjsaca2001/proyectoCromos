@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentactividades')
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        @foreach ($tematica as $tematica)
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="tematicas">
                                    <span data-feather=""></span>
                                    {{ $tematica->nombreTematica }}
                                    {{ $tematica->idTematica }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <br>
                <h2>Econometría</h2>
                <div class="table-responsive">
                    <ul class="nav flex-column">
                            <li class="nav-itemA">
                                <a class="nav-link" href="{{ url('test') }}">
                                    <h1 id="actividades"></h1>
                                </a>
                            </li>

                        <li class="nav-itemA">
                            <a class="nav-link" href="#">
                                <span data-feather=""></span>
                                Actividad 2
                            </a>
                        </li>
                        <li class="nav-itemA">
                            <a class="nav-link" href="#">
                                <span data-feather=""></span>
                                Actividad 3
                            </a>
                        </li>
                        <li class="nav-itemA">
                            <a class="nav-link" href="#">
                                <span data-feather=""></span>
                                Actividad 4
                            </a>
                        </li>
                        <li class="nav-itemA">
                            <a class="nav-link" href="#">
                                <span data-feather=""></span>
                                Actividad 5
                            </a>
                        </li>
                        <li class="nav-itemA">
                            <a class="nav-link" href="#">
                                <span data-feather=""></span>
                                Actividad 6
                            </a>
                        </li>
                        <li class="nav-itemA">
                            <a class="nav-link" href="#">
                                <span data-feather=""></span>
                                Actividad 7
                            </a>
                        </li>
                        <li class="nav-itemA">
                            <a class="nav-link" href="#">
                                <span data-feather=""></span>
                                Actividad 8
                            </a>
                        </li>
                        <li class="nav-itemA">
                            <a class="nav-link" href="#">
                                <span data-feather=""></span>
                                Actividad 9
                            </a>
                        </li>
                        <li class="nav-itemA">
                            <a class="nav-link" href="#">
                                <span data-feather=""></span>
                                Actividad 10
                            </a>
                        </li>
                    </ul>
                </div>
            </main>
        </div>
    </div>


@endsection
