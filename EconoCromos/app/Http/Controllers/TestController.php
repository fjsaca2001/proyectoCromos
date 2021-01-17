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
    public function show($id)
    {
        $actividad = Actividad::where('idActividad', $id)->get();
        return view('internas.test',compact ('actividad'));
    }
}
