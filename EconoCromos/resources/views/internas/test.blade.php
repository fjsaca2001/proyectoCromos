@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentactividades')
<section class="estructuraTest">
    <h2 class="titulotest">{{$actividad->nombreActividad}}</h2>
    @php 
        $n = 1;
        $count = 1;
        $nInput = 1;
    @endphp
    <form class="testForm" action="{{ route('test.store') }}" name="quiz"  id="myquiz">
        @foreach( $actividad->preguntas as $pregunta)
        <h3 class="nroPregunta">{{$pregunta->pregunta}}</h3>    
        <article class="pregunta">
                <h3 id="pregunta{{$n}}"></h3>
                    <div class="opcion{{$n}} radiobtn">
                        <input class="" type="radio" value="incorrecta" name="question[{{$pregunta->idPregunta}}]" id="{{$nInput}}">
                        <label for="{{$nInput}}">
                            {{$pregunta->opcion1}}
                        </label> <br>
                        @php 
                            $nInput = $nInput+ 1;
                        @endphp
                    </div>
                    <div class="opcion{{$n}} radiobtn">
                        <input class="form-check-input" type="radio" value="incorrecta" name="question[{{$pregunta->idPregunta}}]" id="{{$nInput}}">
                        <label for="{{$nInput}}">
                            {{$pregunta->opcion2}}
                        </label> <br>
                        @php 
                            $nInput = $nInput+ 1;
                        @endphp
                    </div> 
                    <div class="opcion{{$n}} radiobtn">
                        <input class="form-check-input" type="radio" value="incorrecta" name="question[{{$pregunta->idPregunta}}]" id="{{$nInput}}"> 
                        <label for="{{$nInput}}">
                            {{$pregunta->opcion3}}
                        </label> <br>
                        @php 
                            $nInput = $nInput+ 1;
                        @endphp
                    </div>
                    <div class="opcion{{$n}} radiobtn">
                        <input class="form-check-input" type="radio" value="correcta" name="question[{{$pregunta->idPregunta}}]" id="{{$nInput}}"> 
                        <label for="{{$nInput}}">
                            {{$pregunta->respuestaCorrecta}}
                        </label> <br>
                        @php 
                            $nInput = $nInput+ 1;
                        @endphp
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
        <div id="reloj"></div>
        <div class ="linkspreg">
            <p style="margin: 0">Preguntas</p>
            @foreach( $actividad->preguntas as $pregunta)
                <article>
                    @if($count == 1)
                        <a class="dirActividad" href="#pregunta{{$count}}">{{$count}}</a><br>
                    @else
                        <a class="dirActividad" href="#pregunta{{$count-1}}">{{$count}}</a><br>
                    @endif
                </article>
                @php
                    $count += 1;
                @endphp
            @endforeach
        </div>
    </div>
    {{-- <div class="dirAct2">
        <h4>Cromos</h4>
        @foreach( $actividad->cromos as $cromo)
            <img style="width: 100px; margin:0.5em" src="{{ asset('storage').'/'.$cromo->imgURL }}">
        @endforeach
    </div> --}}
    <div class="dirAct2">
        <h4>Cromos</h4>
        <div class="layersAn">
            @foreach( $actividad->cromos as $cromo)
                <img style="width: 130px; margin:0.5em" src="{{ asset('storage').'/'.$cromo->imgURL }}" class="player">
            @endforeach
        </div>
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
                if (Math.floor( (secs) % 60 ) < 10) {
                    element.innerHTML = "<div class='relojContent'><b>00:0"+Math.floor( (secs) % 60 )+"</b>"+"<img style='width: 50px; display:inline; margin-top:-0.2em' src='{{ asset('img/10seg.gif') }}'>"+  "</div>";  
                } else {
                    element.innerHTML = "<div class='relojContent'> <b>00:"+Math.floor( (secs) % 60 )+"</b>"+"<img style='width: 40px; display:inline; margin-left:0.2em; margin-top:-0.2em' src='{{ asset('img/1min.png') }}'>"+  "</div>";    
                }
            } else if (secs >= 60 && secs < 600){
                if (Math.floor( (secs) % 60 ) < 10) {                    
                    element.innerHTML = "<div class='relojContent'> <b>0"+Math.floor( (secs/60) % 60 )+ ":0" +Math.floor( (secs) % 60 )+ "</b>"+"<img style='width: 40px; display:inline; margin-left:0.2em; margin-top:-0.2em' src='{{ asset('img/1mas.png') }}'>"+  "</div>"; 
                } else {
                    element.innerHTML = "<div class='relojContent'> <b>0"+Math.floor( (secs/60) % 60 )+ ":" +Math.floor( (secs) % 60 )+ "</b>"+"<img style='width: 40px; display:inline; margin-left:0.2em; margin-top:-0.2em' src='{{ asset('img/1mas.png') }}'>"+  "</div>"; 
                }
            } else {
                element.innerHTML = "<div class='relojContent'> <b>"+Math.floor( (secs/60) % 60 )+ ":0" +Math.floor( (secs) % 60 )+ "</b>"+"<img style='width: 40px; display:inline; margin-left:0.2em; margin-top:-0.2em' src='{{ asset('img/1mas.png') }}'>"+  "</div>";  
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
    <script type="text/javascript">countDown( <?php echo $actividad->duracionTestSeg  ?> ,"reloj");</script>
@endsection
