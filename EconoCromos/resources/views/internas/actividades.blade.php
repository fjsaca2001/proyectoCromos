@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentactividades')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        @php
                        $n = 1;
                        @endphp
                        @foreach ($albumContenido->tematicas as $tematicas)
                            <li class="nav-item">
                                <a class="nboton" target="{{ $n }}">{{ $tematicas['nombreTematica'] }}</a><br>
                                @php
                                $n = $n+1;
                                @endphp
                            </li>

                        @endforeach
                        <script>
                            jQuery(function() {
                                jQuery('.nboton').click(function() {
                                    jQuery('.classTem1').hide();
                                    jQuery('#tematica' + $(this).attr('target')).toggle('slide');
                                });
                            });

                        </script>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <br>
                <div class="table-responsive">
                    <div id="tematica1" class="classTem1">
                        <h2>{{ $albumContenido->tematicas[0]->nombreTematica }}</h2>
                        <ul class="nav flex-column">
                            @foreach ($albumContenido->tematicas[0]->actividad as $actividad)
                                <li class="nav-itemA">
                                    <a class="nav-link" href="{{url('test/')}}">{{ $actividad->nombreActividad }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div id="tematica2" class="classTem1" style="display: none;">
                        <h2>{{ $albumContenido->tematicas[1]->nombreTematica }}</h2>
                        <ul class="nav flex-column">
                            @foreach ($albumContenido->tematicas[1]->actividad as $actividad)
                                <li class="nav-itemA">
                                    <a class="nav-link" href="{{url('test/')}}">{{ $actividad->nombreActividad }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div id="tematica3" class="classTem1" style="display: none;">
                        <h2>{{ $albumContenido->tematicas[2]->nombreTematica }}</h2>
                        <ul class="nav flex-column">
                            @foreach ($albumContenido->tematicas[2]->actividad as $actividad)
                                <li class="nav-itemA">
                                    <a class="nav-link" href="{{url('test/')}}">{{ $actividad->nombreActividad }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div id="tematica4" class="classTem1" style="display: none;">
                        <h2>{{ $albumContenido->tematicas[3]->nombreTematica }}</h2>
                        <ul class="nav flex-column">
                            @foreach ($albumContenido->tematicas[3]->actividad as $actividad)
                                <li class="nav-itemA">
                                    <a class="nav-link" href="{{url('test/')}}">{{ $actividad->nombreActividad }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div id="tematica5" class="classTem1" style="display: none;">
                        <h2>{{ $albumContenido->tematicas[4]->nombreTematica }}</h2>
                        <ul class="nav flex-column">
                            @foreach ($albumContenido->tematicas[4]->actividad as $actividad)
                                <li class="nav-itemA">
                                    <a class="nav-link" href="{{url('test/')}}">
                                        {{ $actividad->nombreActividad }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div id="tematica6" class="classTem1" style="display: none;">
                        <h2>{{ $albumContenido->tematicas[5]->nombreTematica }}</h2>
                        <ul class="nav flex-column">
                            @foreach ($albumContenido->tematicas[5]->actividad as $actividad)
                                <li class="nav-itemA">
                                    <a class="nav-link" href="{{url('test/')}}">{{ $actividad->nombreActividad }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </main>
        </div>
    </div>


@endsection
