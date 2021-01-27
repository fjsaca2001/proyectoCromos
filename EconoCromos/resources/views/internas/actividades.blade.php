@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentactividades')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <section class="estructuraAct">
        <section class="navAlbum">
            @php 
                $n = 1;
                $n2 = 1;  
            @endphp
                <nav>
                @foreach( $albumContenido as $album)
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="{{$n2}}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#nombre{{$n2}}" aria-expanded="true" aria-controls="nombre{{$n2}}">
                                {{$album->nombre}}
                            </button>
                            </h2>
                            <div id="nombre{{$n2}}" class="accordion-collapse collapse show" aria-labelledby="{{$n2}}" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    @foreach( $album->tematicas as $tematicas)
                                        <a class="nboton" target="{{$n}}" > {{$tematicas['nombreTematica']}}</a> <br>
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
                    </div>
                @endforeach
                <script>
                    jQuery(function(){
                        jQuery('.nboton').click(function(){
                            jQuery('.classTem1').hide();
                            jQuery('#tematica'+$(this).attr('target')).toggle('slide');
                        });
                    });
                </script>
            </nav>
        </section>
        <section class="cromos">
            <div class="table-responsive">
                <div id="tematica0" class="classTem1">
                    <ul class="nav flex-column">
                        @foreach ($albumContenido[0]->tematicas[0]->actividad as $actividad)
                            <li class="nav-itemA">
                                <a class="nav-link" href="{{url('test',$actividad->idActividad )}}">{{ $actividad->nombreActividad }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @php 
                    $n2 = 1;
                @endphp
                @foreach ($albumContenido as $album)
                    @foreach ($album->tematicas as $tematica)
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
                @endforeach
            </div>
        </section>
    </section>

    </section>


@endsection
