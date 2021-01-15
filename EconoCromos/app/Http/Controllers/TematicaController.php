<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;
use App\Models\Tematica;

class TematicaController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function byActividades($id)
    {
        return Actividad::where('idTematica', $id)->get();
    }

    public function index()
    {
        //
        $datos['tematica']=Tematica::all();
        return view('internas.actividades',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //     
        //return view('usuarios.create');
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(/*usuarios $usuarios*/)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($idTematica)
    {
        //
        // $tematicas=Tematica::findOrFail($idTematica);
        // return view('admin.edit',compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$idUsuario)
    {
        //
        
        // $datosUsuario=request()->except(['_token','_method']);
        // User::where('idUsuario','=',$idUsuario)->update($datosUsuario);

        // $usuarios=User::findOrFail($idUsuario);
        // //return view('usuarios.edit',compact('usuarios'));
        // if(auth()->user()->rol != 3){
        //     return redirect('usuarios')->with('Mensaje','Usuario modificado con exito');
            
        // }else{
        //     return redirect('perfil')->with('Mensaje','Usuario modificado con exito');
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($idUsuario)
    {
        //
        // User::destroy($idUsuario);
        // return redirect('usuarios')->with('Mensaje','Usuario eliminado con exito');
    }
}