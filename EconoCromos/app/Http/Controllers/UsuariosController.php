<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['usuarios']=Usuarios::paginate(10);
        return view('usuarios.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //     
        return view('usuarios.create');
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
        //$datosUsuario=request()->all();
        $datosUsuario=request()->except('_token');
        usuarios::insert($datosUsuario);
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($idUsuario)
    {
        //
        $usuarios=Usuarios::findOrFail($idUsuario);
        return view('usuarios.edit',compact('usuarios'));
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
        $datosUsuario=request()->except(['_token','_method']);
        Usuarios::where('idUsuario','=',$idUsuario)->update($datosUsuario);

        $usuarios=Usuarios::findOrFail($idUsuario);
        //return view('usuarios.edit',compact('usuarios'));
        return redirect('usuarios');
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
        Usuarios::destroy($idUsuario);
        return redirect('usuarios');
    }
}
