<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cromo;


class AlbumController extends Controller
{
    public function index()
    {
        //
        $datos['cromo']=Cromo::paginate(10);
        return view('usuario.album',$datos);
        //return response()->json($datos);
    }
}
