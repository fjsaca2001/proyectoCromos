@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentactividades')
<section class="estructuraTest">
    <h2>Test</h2>
    @php 
        $n = 1;  
    @endphp
    <div id="status"></div>

    <form action="{{ route('test.store') }}" name="quiz"  id="myquiz">
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
                        <input type="hidden" name="valorInputActiv" id="valorInputActiv" value="{{$actividad->idActividad}}"> 
                        <input type="hidden" name="valorInputUser" id="valorInputUser" value="{{auth()->user()->idUsuario}}"> 

            </article>
            @php 
                $n = $n+1;  
            @endphp
        @endforeach
        <button type="submit" name="submitbutton" class="btn btn-success m-auto"> Testear</button>
    </form>
    <!-- aletorizar respuestas -->
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
    <!-- cuenta regresiva -->
    <script>
        function countDown(secs, elem) {
            var element = document.getElementById(elem);
            if((secs/60) < 1){
                element.innerHTML = "<h3>Te quedan <b>"+Math.floor( (secs) % 60 )+"</b> segundos </h3>";  
            } else if (secs >= 60 && secs < 120){
                element.innerHTML = "<h3>Te queda <b>"+Math.floor( (secs/60) % 60 )+ "</b> minuto <b>" +Math.floor( (secs) % 60 )+ "</b> segundos </h3>" 
            } else {
                element.innerHTML = "<h3>Te quedan <b>"+Math.floor( (secs/60) % 60 )+ "</b> minutos <b>" +Math.floor( (secs) % 60 )+ "</b> segundos </h3>";  
            }

            if(secs < 1) {
                document.quiz.submit();
            }
            else {
                secs--;
                setTimeout('countDown('+secs+',"'+elem+'")',1000);
            }
        }
    </script> 
    <script type="text/javascript">countDown( <?php echo $actividad->duracionTestSeg  ?> ,"status");</script>
@endsection
