@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentalbum')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <section class="estructuraAlbum">
        <section class="navAlbum">
            <nav>
                @php 
                    $n = 1;  
                @endphp
                @foreach( $albumContenido->tematicas as $tematicas)
                    <a class="nboton" target="{{$n}}" > {{$tematicas['nombreTematica']}}</a> <br>
                    @php
                        $n = $n+1;
                    @endphp
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
            <h1>Álbum de {{auth()->user()->nickname}}</h1> 
            <div id="tematica1" class="classTem1" >
                @foreach( $albumContenido->tematicas[0]->cromos as $cromo)
                    @php
                        $encontrado = False;
                    @endphp
                    @if(count($albumContenido->desbloqueados) == 0)
                        <article class="desactivarCromo">
                            <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                        </article>
                    @else
                        @foreach( $albumContenido->desbloqueados as $desbloqueado)
                            @if($desbloqueado->idCromo === $cromo->idCromo && auth()->user()->idUsuario == $desbloqueado->idUsuario && auth()->user()->idAlbum == $desbloqueado->idAlbum)
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
                                    Descripción del cromo <br>
                                    {{$cromo->descripcion}} <br>
                                    Numero de cromo
                                    {{$cromo->idCromo}}
                                </div>
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
                $cantDes = 0;  
            @endphp
            @foreach( $albumContenido->tematicas as $tematica)
                <div id="tematica{{$n2}}" class="classTem1" style="display: none;">
                    @foreach( $tematica->cromos as $cromo)
                        @php
                            $encontrado = False;
                        @endphp
                        @if(count($albumContenido->desbloqueados) == 0)
                            <article class="desactivarCromo">
                                <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                            </article>
                        @else
                            @foreach( $albumContenido->desbloqueados as $desbloqueado)
                                @if($desbloqueado->idCromo === $cromo->idCromo && auth()->user()->idUsuario == $desbloqueado->idUsuario && auth()->user()->idAlbum == $desbloqueado->idAlbum)
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
                                        Descripción del cromo <br>
                                        {{$cromo->descripcion}} <br>
                                        Numero de cromo
                                        {{$cromo->idCromo}}
                                    </div>
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
            <p class="pCantidad">{{$cantDes}}/180</p>
        </section>
    </section>
@endsection
