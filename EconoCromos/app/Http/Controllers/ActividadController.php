<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Tematica;



class ActividadController extends Controller
{

    

    public function index(){
        $albumContenido = Album::all();
        return view('internas.actividades',compact ('albumContenido'));
    }

}
