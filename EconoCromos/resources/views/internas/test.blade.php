@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentactividades')
    <section class="estructuraTest">
        <h2>Test</h2>
        @php 
            $n = 1;  
        @endphp
        @foreach( $actividad[0]->preguntas as $pregunta)
            <article>
                <h3>{{$pregunta->pregunta}}</h3>
                {{--  <button class="opcion{{$n}}"> {{$pregunta->opcion1}}</button>
                <button class="opcion{{$n}}"> {{$pregunta->opcion2}}</button>
                <button class="opcion{{$n}}"> {{$pregunta->opcion3}}</button>
                <button class="opcion{{$n}}"> {{$pregunta->respuestaCorrecta}}</button>  --}}
                <input type="radio" name="respuesta" value="0"> {{$pregunta->opcion1}} <br>
                <input type="radio" name="respuesta" value="0"> {{$pregunta->opcion2}} <br>
                <input type="radio" name="respuesta" value="0"> {{$pregunta->opcion3}} <br>
                <input type="radio" name="respuesta" value="0"> {{$pregunta->respuestaCorrecta}} <br>
            </article>
            @php 
                $n = $n+1;  
            @endphp
        @endforeach
        
        <script>
            for (var x = 1; x<= 10; x++) {
                var cards = $(".opcion"+x);
                for(var i = 0; i < cards.length; i++){
                    var target = Math.floor(Math.random() * cards.length -1) + 1;
                    var target2 = Math.floor(Math.random() * cards.length -1) +1;
                    cards.eq(target).before(cards.eq(target2));
                } 
            }
        </script>
    </section>
@endsection
