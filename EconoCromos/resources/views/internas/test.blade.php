@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentactividades')
<section class="estructuraTest">
    <h2>Test</h2>
    @php 
        $n = 1;  
    @endphp
    <form action="{{ route('test.store') }}">
        @foreach( $actividad->preguntas as $pregunta)
            <article>
                <h3>{{$pregunta->pregunta}}</h3>
                    <div class="opcion{{$n}}">
                        <input type="radio" value="incorrecta" name="question[{{$pregunta->idPregunta}}]"> {{$pregunta->opcion1}} <br>
                    </div>
                    <div class="opcion{{$n}}">
                        <input type="radio" value="incorrecta" name="question[{{$pregunta->idPregunta}}]"> {{$pregunta->opcion2}} <br>
                    </div>
                    <div class="opcion{{$n}}">
                        <input type="radio" value="incorrecta" name="question[{{$pregunta->idPregunta}}]"> {{$pregunta->opcion3}} <br>
                    </div>
                    <div class="opcion{{$n}}">
                        <input type="radio" value="correcta" name="question[{{$pregunta->idPregunta}}]"> {{$pregunta->respuestaCorrecta}} <br>
                    </div>
                        <input type="hidden" name="numeroPreg" id="numeroPreg" value="{{$n}}"> 
            </article>
            @php 
                $n = $n+1;  
            @endphp
        @endforeach
        <button type="submit" name="submit" class="btn btn-success m-auto " > Testear</button>
    </form>
    @php 
            
    @endphp

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
@endsection
