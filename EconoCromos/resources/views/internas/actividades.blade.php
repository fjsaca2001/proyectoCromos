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
                    @php 
                        $n2 = 1;
                    @endphp
                    <div id="tematica1" class="classTem1">
                        <h2>{{ $albumContenido->tematicas[0]->nombreTematica }}</h2>
                        <ul class="nav flex-column">
                            @foreach ($albumContenido->tematicas[0]->actividad as $actividad)
                                <li class="nav-itemA">
                                    <a class="nav-link" href="{{url('test',$actividad->idActividad )}}">{{ $actividad->nombreActividad }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @foreach ($albumContenido->tematicas as $tematica)
                        <div id="tematica{{$n2}}" class="classTem1" style="display: none;">
                            <h2>{{ $tematica->nombreTematica }}</h2>
                            <ul class="nav flex-column">
                                @foreach ($tematica->actividad as $actividad)
                                    <li class="nav-itemA">
                                        @php
                                            $idenviado = $actividad->idActividad;
                                        @endphp
                                        <a class="nav-link" href="{{url('test', $idenviado)}}">{{ $actividad->nombreActividad }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @php 
                            $n2 = $n2 +1;  
                        @endphp
                    @endforeach
                </div>
            </main>
        </div>
    </div>


@endsection
