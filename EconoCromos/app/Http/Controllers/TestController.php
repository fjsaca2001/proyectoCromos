<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\Tematica;
use App\Models\Pregunta;

class TestController extends Controller
{
    public function index(){
        
    }
    public function show($idenviado)
    {   /*
        $actividad = Actividad::where('idActividad', $id)->get();
        return view('internas.test',compact ('actividad'));
        */
        $actividad = Actividad::All();
        $idenviado = intval($idenviado);
        return view('internas.test',compact ('actividad'), compact('idenviado'));
    }
}
