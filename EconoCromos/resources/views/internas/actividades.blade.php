@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentactividades')
<!-- Importación -->
<link href="{{ asset('css/actividades.css') }}" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Contenido de la páginas -->
<section class="contenidoActividades">
    <section class="tablaAlbumes table-responsive">
        @php
        $n = 1;
        $n2 = 1;
        @endphp
        <nav>
            @foreach( $albumContenido as $album)
            <div class="accordion-item">
                <h2 class="accordion-header" id="{{$n2}}">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#nombre{{$n2}}" aria-expanded="true" aria-controls="nombre{{$n2}}">
                        {{$album->nombre}}
                    </button>
                </h2>
            </div>
            <div class="accordion" id="accordionExample">
                <div id="nombre{{$n2}}" class="accordion-collapse collapse show" aria-labelledby="{{$n2}}" data-bs-parent="#accordionExample">
                    <div class="listaTematicas accordion-body">
                        @foreach( $album->tematicas as $tematicas)
                        <a class="nboton link-primary" target="{{$n}}"> {{$tematicas['nombreTematica']}}</a> <br>
                        @php
                        $n = $n+1;
                        @endphp
                        @endforeach
                    </div>
                </div>
                @php
                $n2 = $n2+1;
                @endphp
            </div>
            @endforeach
            <script>
                jQuery(function() {
                    jQuery('.nboton').click(function() {
                        jQuery('.classTem1').hide();
                        jQuery('#tematica' + $(this).attr('target')).toggle('slide');
                    });
                });
            </script>
        </nav>
    </section>
    <section class="tablaActividades table-responsive">
        <div id="tematica0" class="classTem1">
            <ul class="list-group">
                <li class="list-group-item">{{ $albumContenido[0]->tematicas[0]->actividad[0]->tematica->nombreTematica }}</li>
                @foreach ($albumContenido[0]->tematicas[0]->actividad as $actividad)
                <a class="list-group-item list-group-item-info" href="{{url('test',$actividad->idActividad )}}">{{ $actividad->nombreActividad }}</a>
                @endforeach
            </ul>
        </div>
        @php
        $n2 = 1;
        @endphp
        @foreach ($albumContenido as $album)
        @foreach ($album->tematicas as $tematica)
        <div id="tematica{{$n2}}" class="classTem1" style="display: none;">
            <ul class="list-group">
                <li class="list-group-item">{{ $tematica->nombreTematica }}</li>
                @foreach ($tematica->actividad as $actividad)
                @php
                $idenviado = $actividad->idActividad;
                @endphp
                <a class="list-group-item list-group-item-info" href="{{url('test', $idenviado)}}">{{ $actividad->nombreActividad }}</a>
                @endforeach
            </ul>
        </div>
        @php
        $n2 = $n2 +1;
        @endphp
        @endforeach
        @endforeach
    </section>
</section>
@endsection