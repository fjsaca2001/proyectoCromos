<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\Tematica;
use App\Models\Pregunta;

class TestController extends Controller
{
    public function index(){
        $datos['pregunta']=Pregunta::all();
        return view('internas.test',$datos);
    }
}