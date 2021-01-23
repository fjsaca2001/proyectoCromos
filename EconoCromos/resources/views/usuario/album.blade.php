@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentalbum')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <section class="estructuraAlbum">
        <section class="navAlbum">
            @php 
                $n = 1;  
            @endphp
                <nav>
                Álbumes <br>
                @foreach( $albumContenido as $album)
                    {{$album->nombre}} <br>
                    @foreach( $album->tematicas as $tematicas)
                        <a class="nboton" target="{{$n}}" > {{$tematicas['nombreTematica']}}</a> <br>
                        @php
                            $n = $n+1;
                        @endphp
                    @endforeach
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
            <div id="tematica0" class="classTem1" >
                <h1>Álbum de {{auth()->user()->nombre}}</h1> 
                @foreach( $albumContenido[0]->tematicas[0]->cromos as $cromo)
                    @php
                        $encontrado = False;
                    @endphp
                    @if(count($albumContenido[0]->desbloqueados) == 0)
                        <article class="desactivarCromo">
                            <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                        </article>
                    @else
                        @foreach( $albumContenido[0]->desbloqueados as $desbloqueado)
                            @if($desbloqueado->idCromo === $cromo->idCromo && auth()->user()->idUsuario == $desbloqueado->idUsuario)
                                @php 
                                    $encontrado = True;
                                @endphp
                            @endif
                        @endforeach
                        @if($encontrado)
                            <article id="activarCromo">
                                <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                                <div class="cromo" id="cromo">
                                    <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                                    {{$cromo->nombre}} <br>
                                    {{$cromo->descripcion}} <br>
                                    # {{$cromo->idCromo}}
                                </div>
                                {{$cromo->nombre}}
                            </article>
                        @else
                            <article class="desactivarCromo">
                                <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                            </article>
                        @endif
                    @endif
                @endforeach
            </div>
            
            @php 
                $n2 = 1;
            @endphp
            @foreach( $albumContenido as $album)
                @php
                    $cantDes = 0;  
                    $cantCromos = 0;  
                @endphp
                @foreach( $album->tematicas as $tematica)
                    <div id="tematica{{$n2}}" class="classTem1" style="display: none;">
                        <h1>Cromos de {{$tematica->nombreTematica}}</h1> 
                        @foreach( $tematica->cromos as $cromo)
                            @php
                                $encontrado = False;
                                $cantCromos = $cantCromos +1;
                            @endphp
                            @if(count($album->desbloqueados) == 0)
                                <article class="desactivarCromo">
                                    <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                                </article>
                            @else
                                @foreach( $album->desbloqueados as $desbloqueado)
                                    @if($desbloqueado->idCromo === $cromo->idCromo && auth()->user()->idUsuario == $desbloqueado->idUsuario)
                                        @php 
                                            $encontrado = True;
                                            $cantDes = $cantDes +1;
                                        @endphp
                                    @endif
                                @endforeach
                                @if($encontrado)
                                    <article id="activarCromo">
                                        <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                                        <div class="cromo" id="cromo">
                                            <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                                            {{$cromo->nombre}} <br>
                                            {{$cromo->descripcion}} <br>
                                            # {{$cromo->idCromo}}
                                        </div>
                                        {{$cromo->nombre}}
                                    </article>
                                @else
                                    <article class="desactivarCromo">
                                        <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                                    </article>
                                @endif
                            @endif
                        @endforeach  
                    </div>
                    @php 
                        $n2 = $n2 +1;  
                    @endphp
                @endforeach
            {{-- <p class="pCantidad">{{$cantDes}}/{{$cantCromos}}</p>  --}}
            @endforeach
        </section>  
    </section>
@endsection
