<?php

namespace App\Http\Controllers;

use App\Models\Respuesta;
use App\Models\Pregunta;
use Illuminate\Http\Request;

class RespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['pregunta']=Pregunta::paginate(5);
        $datos2['respuesta']=Respuesta::paginate(100);
        return view('admin.agregarrespuesta',$datos,$datos2)->with('Mensaje', 'Usted agrego una nueva pregunta');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datos=request()->except('_token');
        Respuesta::insert($datos);
        $datos['respuesta']=Respuesta::paginate(100);
        $datos2['pregunta']=Pregunta::paginate(10);
        return view('admin.agregarrespuesta',$datos,$datos2)->with('Mensaje', 'Usted agrego una nueva pregunta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function show(Respuesta $respuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(Respuesta $respuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Respuesta $respuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy($idRespuesta)
    {
        //
        Respuesta::destroy($idRespuesta);
        $datos['respuesta']=Respuesta::paginate(100);
        $datos2['pregunta']=Pregunta::paginate(10);
        return view('admin.agregarrespuesta',$datos,$datos2)->with('Mensaje', 'Respuesta Eliminada');
    }
}
