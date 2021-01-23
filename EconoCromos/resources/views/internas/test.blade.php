@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentactividades')
<<<<<<< HEAD

<!-- <section class="estructuraTest">
    <h1>{{$actividad[$idenviado-1]->nombreActividad}}</h1>
    @php
    $n = 1;
    @endphp
    <article>
        <form action="" action="POST">

            @foreach( $actividad[$idenviado-1]->preguntas as $pregunta)

            <h3>{{$pregunta->pregunta}}</h3>
            <div class="opcion{{$n}}">
                <input type="radio" name="{{$pregunta->pregunta}}" value="0"> {{$pregunta->opcion1}} <br>
            </div>
            <div class="opcion{{$n}}">
                <input type="radio" name="{{$pregunta->pregunta}}" value="0"> {{$pregunta->opcion2}} <br>
            </div>
            <div class="opcion{{$n}}">
                <input type="radio" name="{{$pregunta->pregunta}}" value="0"> {{$pregunta->opcion3}} <br>
            </div>
            <div class="opcion{{$n}}">
                <input type="radio" name="{{$pregunta->pregunta}}" value="1"> {{$pregunta->respuestaCorrecta}} <br>
            </div>

            @php
            $n = $n+1;
=======
    <section class="estructuraTest">
        <h2>Test</h2>
        @php 
            $n = 1;  
        @endphp
        @foreach( $actividad->preguntas as $pregunta)
            <article>
                <h3>{{$pregunta->pregunta}}</h3>
                <form action="">
                    <div class="opcion{{$n}}">
                        <input type="radio" value=""> {{$pregunta->opcion1}} <br>
                    </div>
                    <div class="opcion{{$n}}">
                        <input type="radio" value=""> {{$pregunta->opcion2}} <br>
                    </div>
                    <div class="opcion{{$n}}">
                        <input type="radio" value=""> {{$pregunta->opcion3}} <br>
                    </div>
                    <div class="opcion{{$n}}">
                        <input type="radio" value=""> {{$pregunta->respuestaCorrecta}} <br>
                    </div>
                </form>
            </article>
            @php 
                $n = $n+1;  
>>>>>>> 834d18e8c5d758480cca1067e1f67e7762cf19ac
            @endphp
            @endforeach
            <input type="submit" value="Enviar Respuestas">
        </form>
    </article>

    <script>
        for (var x = 1; x <= 10; x++) {
            var cards = $(".opcion" + x);
            for (var i = 0; i < cards.length; i++) {
                var target = Math.floor(Math.random() * cards.length - 1) + 1;
                var target2 = Math.floor(Math.random() * cards.length - 1) + 1;
                cards.eq(target).before(cards.eq(target2));
            }
        }
    </script>
</section> -->
@endsection