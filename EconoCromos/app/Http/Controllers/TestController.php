<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\Tematica;
use App\Models\Pregunta;
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
        
        $array = array_values($request->input('question'));
        $count = 0;
        $cantidadPreguntas = count($array);
        foreach($array as $array2) {
            if( $array2 == "correcta") {
                $count = $count +1;
            }
        }
        //dd($array);
        return view('internas.resultado', compact('count'), compact('cantidadPreguntas'));

    }
}
