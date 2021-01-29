@extends('layouts.layout')
@section('titulo', 'Economía a tu alcance')
@section('contentalbum')
    <section class="presentarResult">
        <h3>Tienes <em style="color: rgb(190, 135, 135)">{{ $correctas }}/{{ $cantidadPreguntas }}</em> respuestas correctas
        </h3>
        @if ($correctas > 0)
            @if ($correctas == 1)
                <h2><strong> Felicidades</strong> haz obtenido el siguiente cromo</h2>
                @foreach ($arrayCromosDesbloqueados as $array)
                    <div class="card" style="width: 17rem; height:auto !important; display:inline-block !important; margin:2em !important; ">
                        <img src="{{ asset('storage') . '/' . $array[1] }}" class="card-img-top" alt="CromoResult">
                        <div class="card-body externs">
                            <p class="readies"> <b>{{ $array[2] }}</b> </p>
                            <p class="readies2">#{{ $array[0] }}</p>
                        </div>
                    </div>
                @endforeach
            @else 
                <h2><strong> Felicidades</strong> haz obtenido los siguientes cromos</h2>
                @foreach ($arrayCromosDesbloqueados as $array)
                    <div class="card" style="width: 17rem; height:auto !important; display:inline-block !important; margin:2em !important; ">
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
            <img src="{{ asset('img/sad.png') }}" style="width: auto !important; margin:2em;" alt="sad">
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
