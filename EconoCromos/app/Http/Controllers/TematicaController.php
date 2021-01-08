<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tematica;

class TematicaController extends Controller
{
    public function index()
    {
        //
        $datos['tematica']=Tematica::paginate(10);

        return view('admin.agregarpreguntas',$datos);
    }
}
