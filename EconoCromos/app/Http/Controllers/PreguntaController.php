<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use App\Models\Tematica;
use App\Models\Actividad;
use Illuminate\Http\Request;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function byTematicas($id)
    {
        return Actividad::where('idTematica', $id)->get();
    }

    public function index()
    {
        //
        $datos['tematica']=Tematica::all();
        $datos2['pregunta']=Pregunta::all();
        return view('admin.agregarpreguntas',$datos,$datos2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('admin.agregarpreguntas');
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
        
        Pregunta::insert($datos);
        
        $datos['tematica']=Tematica::all();
        $datos2['pregunta']=Pregunta::all();
        
        return view('admin.agregarpreguntas',$datos2,$datos);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function show(Pregunta $pregunta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function edit($idPregunta)
    {
        //

        $pregunta=Pregunta::findOrFail($idPregunta);
        return view('admin.editPregunta',compact('pregunta'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idPregunta)
    {
        //
        $datosPregunta=request()->except(['_token','_method']);
        Pregunta::where('idPregunta','=',$idPregunta)->update($datosPregunta);
        
        $datos['tematica']=Tematica::all();
        $datos2['pregunta']=Pregunta::all();
        return redirect('agregarPregunta');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function destroy($idPregunta)
    {
        Pregunta::destroy($idPregunta);
        $datos['tematica']=Tematica::all();
        $datos2['pregunta']=Pregunta::all();
        
        return view('admin.agregarpreguntas',$datos2,$datos);
    }

}
