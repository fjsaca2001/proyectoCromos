<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;
use App\Models\Tematica;

class TematicaController extends Controller
{
    public function index()
    {
        //
        
        $datos['tematica']=Tematica::paginate(10);
        $datos2['actividad']=Actividad::paginate(10);
        return view('admin.agregarpreguntas',$datos,$datos2);
        
    }
}
