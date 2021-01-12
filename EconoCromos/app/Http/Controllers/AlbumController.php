<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cromo;
use App\Models\Tematica;
use App\Models\User;
use App\Models\Album;


class AlbumController extends Controller
{
    public function index()
    {
        /*
        $datos['cromo']=Cromo::paginate(10);
        return view('usuario.album',$datos);
        */
        $albumContenido = Album::first();
        return view('usuario.album',compact ('albumContenido'));
    }
}
