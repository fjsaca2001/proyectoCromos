<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cromo;
use App\Models\Tematica;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class CromoController extends Controller
{
    public function index()
    {   
        $datos['cromo']=Cromo::all();
        $nombretematica['tematica'] = Tematica::all();
        
        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            return view('admin.agregarCromo',$datos, $nombretematica);
        } else {
            return redirect("/");
        }
        /*
        $tematicas = Tematica::first();
        return view('admin.agregarCromo',compact ('tematicas'));
        */
    }
    // Editar un cromo
    public function edit($idCromo)
    {
        $cromos=Cromo::findOrFail($idCromo);
        $nombretematica['tematica'] = Tematica::all();

        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            return view('admin.editCromo',compact('cromos'), $nombretematica);
        } else {
            return redirect("/");
        }
    }
    /*
    {
        return Validator::make($data, [
            'nombre' => ['required', 'string', 'max:255'],
            'nickname' => ['required', 'string', 'max:15', 'unique:usuariosC'],
            'email' => ['required', 'string', 'max:255', 'unique:usuariosC'],
            'pais' => ['required', 'string', 'max:25'],
            'edad' => ['required', 'integer',],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }
    */

    public function update(Request $request,$idCromo)
    {
        //se capta toda la informacion y se desecha los datos de mas del form        
        $dataCromo=request()->except(['_token','_method']);

        
        $cromos=Cromo::findOrFail($idCromo);
        $nombretematica['tematica'] = Tematica::paginate(10);
        // se añade la ruta de la imagen y se borra la anterior
        if($request->hasFile('imgURL')){
            Storage::delete('public/'.$cromos->imgURL);
            $dataCromo['imgURL'] =$request->file('imgURL')->store('uploads','public');
        }
        
        /*
        $datos['usuariosC']=User::paginate(5);        
        return view('admin.adminindex',$datos);
        */
        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            Cromo::where('idCromo','=',$idCromo)->update($dataCromo);
            return redirect('agregarCromo')->with('Mensaje','Cromo modificado correctamente');
        }else{
            return redirect('/');
        }
    }

    public function store(Request $request)
    {
        
        $dataCromo=request()->all();
        $dataCromo=request()->except('_token');

        if($request->hasFile('imgURL')){
            $dataCromo['imgURL'] =$request->file('imgURL')->store('uploads','public');
        }

        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            Cromo::insert($dataCromo);
            return redirect('agregarCromo')->with('Mensaje', 'Cromos registrado correctamente');
        }else{
            return redirect('/');
        }

    }
    public function destroy($idCromo)
    {
        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            Cromo::destroy($idCromo);
            return redirect('agregarCromo')->with('Mensaje','Usuario eliminado con exito');
        }else{
            return redirect('/');
        }
    }

}
