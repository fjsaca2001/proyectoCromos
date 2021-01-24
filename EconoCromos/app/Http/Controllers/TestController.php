<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\Tematica;
use App\Models\Pregunta;
use App\Models\Album;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function index(){
        
    }
    public function show($idenviado)
    {   /*
        $actividad = Actividad::where('idActividad', $id)->get();
        return view('internas.test',compact ('actividad'));
        */
        /*
        $actividad = Actividad::All();
        $idenviado = intval($idenviado);
        return view('internas.test',compact ('actividad'), compact('idenviado'));
        */
        $idenviado = intval($idenviado);
        $actividad = Actividad::find($idenviado);
        return view('internas.test',compact ('actividad'));

    }

    public function store(Request $request )
    {   
        $correctas = 0;
        $cantidadPreguntas= $request->input('numeroPreg');

        if(! ($request->input('question') == NULL) ) {
            $array = array_values($request->input('question'));
            
            foreach($array as $array2) {
                if( $array2 == "correcta") {
                    $correctas = $correctas +1;
                }
            }
        }

        $albumContenido = Album::all();

        //$cantidadPreguntas = count($array);
        return view('internas.resultado', compact('correctas', 'cantidadPreguntas', 'albumContenido') );

    }
}
