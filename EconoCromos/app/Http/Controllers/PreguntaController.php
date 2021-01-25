<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use App\Models\Tematica;
use App\Models\Actividad;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function byTematicas($id)
    {
        return Tematica::where('idAlbum', $id)->get();
    }
    public function byActividades($id)
    {
        return Actividad::where('idTematica', $id)->get();
    }

    public function index()
    {
        // Si es admin o super
        /*
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            $datos['tematica']=Tematica::all();
            $datos2['pregunta']=Pregunta::all();
            return view('admin.agregarpreguntas',$datos,$datos2);
        }else{
            return redirect('/');
        }
        */

        $albumContenido = Album::all();
        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            return view('admin.agregarpreguntas', compact('albumContenido'));
        } else {
            return redirect("/");
        }
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
        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            $datos=request()->except(['_token','album']);

            $datos['pregunta'] = ucfirst( $datos['pregunta']);
            $datos['pregunta'] = ucwords( $datos['pregunta'] ,"?" );
            $datos['pregunta'] = ucwords( $datos['pregunta'] ,"¿" );
            
            $datos['opcion1'] = ucfirst( $datos['opcion1']);
            $datos['opcion2'] = ucfirst( $datos['opcion2']);
            $datos['opcion3'] = ucfirst( $datos['opcion3']);
            $datos['respuestaCorrecta'] = ucfirst( $datos['respuestaCorrecta']);

            Pregunta::insert($datos);
            
            return redirect('agregarPregunta')->with('Mensaje','Pregunta registrada correctamente');
        }else{
            return redirect('/');
        }

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
        $albumContenido = Album::all();
        $pregunta=Pregunta::findOrFail($idPregunta);

        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            return view('admin.editPregunta',compact('pregunta') , compact('albumContenido'));
        }else{
            return redirect('/');
        }

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
        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            $datosPregunta=request()->except(['_token','_method','albun']);

            $datosPregunta['pregunta'] = ucfirst( $datosPregunta['pregunta']);
            $datosPregunta['pregunta'] = ucwords( $datosPregunta['pregunta'] ,"?" );
            $datosPregunta['pregunta'] = ucwords( $datosPregunta['pregunta'] ,"¿" );
            
            $datosPregunta['opcion1'] = ucfirst( $datosPregunta['opcion1']);
            $datosPregunta['opcion2'] = ucfirst( $datosPregunta['opcion2']);
            $datosPregunta['opcion3'] = ucfirst( $datosPregunta['opcion3']);
            $datosPregunta['respuestaCorrecta'] = ucfirst( $datosPregunta['respuestaCorrecta']);

            Pregunta::where('idPregunta','=',$idPregunta)->update($datosPregunta);
            return redirect('agregarPregunta')->with('Mensaje','Información de la pregunta actualizada');
        }else{
            return redirect('/');
        }
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function destroy($idPregunta)
    {   if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            Pregunta::destroy($idPregunta);
            return redirect('agregarPregunta')->with('Mensaje','Pregunta eliminada del sistema');
        }else{
            return redirect('/');
        }
    }

}
