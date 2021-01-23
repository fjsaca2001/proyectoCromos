<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;


class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Si es admin o super
        if(Gate::allows('acciones-admin')){
            $datos['usuariosC']=User::all();
            return view('admin.adminindex',$datos);
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
        if(Gate::allows('acciones-admin')){
            $usuarios=User::findOrFail($idUsuario);
            return view('admin.edit',compact('usuarios'));
        } else {
            return redirect("/");
        }
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
        $validarInfoFormUsu = [
            'nombre' => 'required|string|max:70',
            'nickname' => 'required|string|max:20',
        ];
        $Mensaje=['required' => 'El :attribute es requerido'];

        $this->validate($request, $validarInfoFormUsu, $Mensaje);
        
        $datosUsuario=request()->except(['_token','_method']);
        $datosUsuario['nombre'] = ucwords( $datosUsuario['nombre'] );

        User::where('idUsuario','=',$idUsuario)->update($datosUsuario);

        $usuarios=User::findOrFail($idUsuario);

        if(Gate::allows('acciones-admin') ){
            return redirect('usuarios')->with('Mensaje','Usuario modificado con éxito');
            
        }else {
            return redirect("/");
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
        // Si es admin o super
        if(Gate::allows('acciones-admin') ){
            User::destroy($idUsuario);
            return redirect('usuarios')->with('Mensaje','Usuario eliminado con exito');
        } else {
            return redirect("/");
        }
    }
}
