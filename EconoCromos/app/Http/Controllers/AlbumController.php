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
        $albumContenido = Album::all();
        return view('usuario.album',compact ('albumContenido'));
    }

}
