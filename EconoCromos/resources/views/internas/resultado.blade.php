@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentalbum')
    <section class="presentarResult">
        <h3>Tienes <em style="color: rgb(190, 135, 135)">{{ $correctas }}/{{ $cantidadPreguntas }}</em> respuestas correctas
        </h3>
        @if ($correctas == $cantidadPreguntas)
            <h2><img style="width:60px" src="{{ asset('img/emoticonFiesta2.gif') }}">¡<strong> Felicidades</strong> haz obtenido <strong>TODOS</strong> los cromos de esta actividad !<img style="width:90px" src="{{ asset('img/emoticonFiesta3.gif') }}"></h2>
            @foreach ($arrayCromosDesbloqueados as $array)
                <div class="card animation-target" style="width: 17rem; height:auto !important; display:inline-block !important; margin:2em !important; ">
                    <img src="{{ asset('storage') . '/' . $array[1] }}" class="card-img-top" alt="CromoResult">
                    <div class="card-body externs">
                        <p class="readies"> <b>{{ $array[2] }}</b> </p>
                        <p class="readies2">#{{ $array[0] }}</p>
                    </div>
                </div>
            @endforeach
            <div>
                <a class="btn btn-info btnes" style="margin: 2em !important;" href="{{ route('album') }}"> Ver mi álbum</a>
            </div>
        @elseif ($correctas > 0 && $correctas < $cantidadPreguntas && count($arrayCromosDesbloqueados)>0)
            @if (count($arrayCromosDesbloqueados)==1)
                <h2><strong> Bien hecho... </strong> haz obtenido el siguiente cromo <img style="width:35px" src="{{ asset('img/oso.png') }}"></h2>
                <h3> no te rindas...<strong><em> !puedes mejorar!</em></strong> </h3>
                @foreach ($arrayCromosDesbloqueados as $array)
                    <div class="card animation-target" style="width: 17rem; height:auto !important; display:inline-block !important; margin:2em !important; ">
                        <img src="{{ asset('storage') . '/' . $array[1] }}" class="card-img-top" alt="CromoResult">
                        <div class="card-body externs">
                            <p class="readies"> <b>{{ $array[2] }}</b> </p>
                            <p class="readies2">#{{ $array[0] }}</p>
                        </div>
                    </div>
                @endforeach
            @else 
                <h2><strong> Felicidades</strong> haz obtenido los siguientes cromos, aún puedes mejorar <img style="width:40px" src="{{ asset('img/feliz.png') }}"></h2>
                <h3> <strong><em>¡sigue intentando...!</em></strong> </h3>
                @foreach ($arrayCromosDesbloqueados as $array)
                    <div class="card animation-target" style="width: 17rem; height:auto !important; display:inline-block !important; margin:2em !important; ">
                        <img src="{{ asset('storage') . '/' . $array[1] }}" class="card-img-top" alt="CromoResult">
                        <div class="card-body externs">
                            <p class="readies"><b>{{ $array[2]}}</b> </p>
                            <p class="readies2">#{{ $array[0] }}</p>
                        </div>
                    </div>
                @endforeach
            @endif 
            <div>
                <a class="btn btn-info btnes" style="margin: 2em !important;" href="{{ route('album') }}"> Ver mi álbum</a>
            </div>
        @else
            <h2><strong>Lástima...</strong> no haz logrado responder correctamente este quiz</h2>
            <h3> <strong><em>¡ aún no te rindas puedes hacerlo !</em></strong> </h3>
            <img src="{{ asset('img/sad2.png') }}" style="width: auto !important; margin:1em;" alt="sad" class="animation-target2">
            <div class="mensajeMoti">
                "Nunca consideres el estudio como una obligación, sino como una oportunidad para penetrar en el bello y maravilloso mundo del saber"
                <h4 class="h4Nombre">Albert Einstein</h4>
            </div>
            <div>
                <a class="btn btn-info btnes" style="margin: 2em !important;" href="{{ url('actividades') }}"> Volver a las actividades</a>
            </div>
        @endif

    </section>
@endsection
