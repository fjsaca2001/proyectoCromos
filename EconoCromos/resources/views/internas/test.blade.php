@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentactividades')
<section class="estructuraTest">
    <h2 class="titulotest">{{$actividad->nombreActividad}}</h2>
    @php 
        $n = 1;
        $count = 1;  
    @endphp
    <form class="testForm" action="{{ route('test.store') }}" name="quiz"  id="myquiz">
        @foreach( $actividad->preguntas as $pregunta)
        <h3 class="nroPregunta">Pregunta {{$n}}</h3>    
        <article class="pregunta">
                <h3 id="pregunta{{$n}}">{{$pregunta->pregunta}}</h3>
                    <div class="opcion{{$n}} form-check">
                        <input class="form-check-input" type="radio" value="incorrecta" name="question[{{$pregunta->idPregunta}}]">
                        <label class="form-check-label" for="flexRadioDefault1">
                            {{$pregunta->opcion1}}
                        </label> <br>
                    </div>
                    <div class="opcion{{$n}} form-check">
                        <input class="form-check-input" type="radio" value="incorrecta" name="question[{{$pregunta->idPregunta}}]">
                        <label class="form-check-label" for="flexRadioDefault1">
                            {{$pregunta->opcion2}}
                        </label> <br>
                    </div> 
                    <div class="opcion{{$n}} form-check">
                        <input class="form-check-input" type="radio" value="incorrecta" name="question[{{$pregunta->idPregunta}}]"> 
                        <label class="form-check-label" for="flexRadioDefault1">
                            {{$pregunta->opcion3}}
                        </label> <br>
                    </div>
                    <div class="opcion{{$n}} form-check">
                        <input class="form-check-input" type="radio" value="correcta" name="question[{{$pregunta->idPregunta}}]"> 
                        <label class="form-check-label" for="flexRadioDefault1">
                            {{$pregunta->respuestaCorrecta}}
                        </label> <br>
                    </div>
                        <input type="hidden" name="numeroPreg" id="numeroPreg" value="{{$n}}"> 
                        <input type="hidden" name="valorInputActiv" id="valorInputActiv" value="{{$actividad->idActividad}}"> 
                        <input type="hidden" name="valorInputUser" id="valorInputUser" value="{{auth()->user()->idUsuario}}"> 

            </article>
            @php 
                $n = $n+1;  
            @endphp
        @endforeach
        <div class="botonEnviarRespuesta">
        <button type="submit" name="submitbutton" class="btn btn-success m-auto enviarTest">Enviar Respuestas</button>
    </div>
    </form>
</section>
    <div class="dirAct">
        <h4>Banco de preguntas</h4>
        @foreach( $actividad->preguntas as $pregunta)
            <a class="dirActividad" href="#pregunta{{$count}}">Pregunta {{$count}}</a><br>
            @php
                $count += 1;
            @endphp
        @endforeach
    </div>
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
