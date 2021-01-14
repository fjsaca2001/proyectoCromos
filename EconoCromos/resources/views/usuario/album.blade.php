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
                    <article id="activarCromo">
                        <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                        <div class="cromo" id="cromo">
                            <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                            Descripción del cromo <br>
                            5
                        </div>
                    </article>
                @endforeach
            </div>
            <div id="tematica2" class="classTem1" style="display: none;">
                @foreach( $albumContenido->tematicas[1]->cromos as $cromo)
                    <article id="activarCromo">
                        <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                        <div class="cromo" id="cromo">
                            <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                            Descripción del cromo <br>
                            5
                        </div>
                    </article>
                @endforeach
            </div>
            <div id="tematica3" class="classTem1" style="display: none;">
                @foreach( $albumContenido->tematicas[2]->cromos as $cromo)
                    <article id="activarCromo">
                        <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                        <div class="cromo" id="cromo">
                            <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                            Descripción del cromo <br>
                            5
                        </div>
                    </article>
                @endforeach
            </div>
            <div id="tematica4" class="classTem1" style="display: none;">
                @foreach( $albumContenido->tematicas[3]->cromos as $cromo)
                    <article id="activarCromo">
                        <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                        <div class="cromo" id="cromo">
                            <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                            Descripción del cromo <br>
                            5
                        </div>
                    </article>
                @endforeach
            </div>
            <div id="tematica5" class="classTem1" style="display: none;">
                @foreach( $albumContenido->tematicas[4]->cromos as $cromo)
                    <article id="activarCromo">
                        <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                        <div class="cromo" id="cromo">
                            <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                            Descripción del cromo <br>
                            5
                        </div>
                    </article>
                @endforeach
            </div>
            <div id="tematica6" class="classTem1" style="display: none;">
                @foreach( $albumContenido->tematicas[5]->cromos as $cromo)
                    <article id="activarCromo">
                        <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                        <div class="cromo" id="cromo">
                            <img src="{{ asset('storage').'/'.$cromo->imgURL }}"> 
                            Descripción del cromo <br>
                            5
                        </div>
                    </article>
                @endforeach
            </div>
            <p class="pCantidad">43/180</p>
        </section>
        
    </section>
        
    </section>
@endsection
