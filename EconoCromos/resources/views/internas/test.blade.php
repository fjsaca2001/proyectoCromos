@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentactividades')
    <section class="estructuraTest">
        <h2>Test</h2>
        @php 
            $n = 1;  
        @endphp
        @foreach( $actividad[$idenviado-1]->preguntas as $pregunta)
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
            @endphp
        @endforeach
        <input type="submit" value="Enviar Respuestas">
    </form>
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