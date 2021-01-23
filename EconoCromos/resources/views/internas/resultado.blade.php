@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentactividades')

<section class="estructuraTest">
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
</section>
@endsection