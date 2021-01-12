<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cromo;
use App\Models\Tematica;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class CromoController extends Controller
{
    public function index()
    {   
        $datos['cromo']=Cromo::paginate(100);
        $nombretematica['tematica'] = Tematica::paginate(10);
        return view('admin.agregarCromo',$datos, $nombretematica);
        
        /*
        $tematicas = Tematica::first();
        return view('admin.agregarCromo',compact ('tematicas'));
        */
    }
    // Editar un cromo
    public function edit($idCromo)
    {
        $cromos=Cromo::findOrFail($idCromo);
        $nombretematica['tematica'] = Tematica::paginate(10);
        return view('admin.editCromo',compact('cromos'), $nombretematica);
    }
    /*
    // validar la correcta insersion de datos en los campos de registro de cromo
    protected function validator(array $data)
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
        Cromo::where('idCromo','=',$idCromo)->update($dataCromo);
        /*
        $datos['usuariosC']=User::paginate(5);        
        return view('admin.adminindex',$datos);
        */
        if(auth()->user()->rol != 3){
            return redirect('agregarCromo')->with('Mensaje','Cromo modificado correctamente');
            
        }else{
            return redirect('perfil')->with('Mensaje','Usuario modificado con exito');
        }
    }

    public function store(Request $request)
    {
        
        $dataCromo=request()->all();
        $dataCromo=request()->except('_token');

        if($request->hasFile('imgURL')){
            $dataCromo['imgURL'] =$request->file('imgURL')->store('uploads','public');
        }
        Cromo::insert($dataCromo);
        return redirect('agregarCromo')->with('Mensaje', 'Cromos registrado correctamente');

    }
    public function destroy($idCromo)
    {
        //
        Cromo::destroy($idCromo);
        return redirect('agregarCromo')->with('Mensaje','Usuario eliminado con exito');
    }

}
