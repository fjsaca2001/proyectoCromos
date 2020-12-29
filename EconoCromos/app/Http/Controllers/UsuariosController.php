<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $datos['usuariosC']=User::paginate(10);
        return view('admin.adminindex',$datos);
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
        //$datosUsuario=request()->all();
        //$datosUsuario=request()->except('_token');
        //usuarios::insert($datosUsuario);
        //return redirect('/')->with('Mensaje', 'Usted se ha registrado, ya puede iniciar sesion');

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
    public function edit($idUsuario)
    {
        //
        $usuarios=User::findOrFail($idUsuario);
        return view('admin.edit',compact('usuarios'));
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
        User::where('idUsuario','=',$idUsuario)->update($datosUsuario);

        $usuarios=User::findOrFail($idUsuario);
        //return view('usuarios.edit',compact('usuarios'));
        if(auth()->user()->rol != 3){
            return redirect('usuarios')->with('Mensaje','Usuario modificado con exito');
            
        }else{
            return redirect('perfil')->with('Mensaje','Usuario modificado con exito');
        }
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
        User::destroy($idUsuario);
        return redirect('usuarios')->with('Mensaje','Usuario eliminado con exito');
    }
}
