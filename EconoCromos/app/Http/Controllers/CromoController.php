<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cromo;
use App\Models\Tematica;
use App\Models\User;
use App\Models\Album;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;


class CromoController extends Controller
{   
    // Funcion principal
    public function index()
    {           
        $albumContenido = Album::all();
        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            return view('admin.agregarCromo', compact('albumContenido'));
        } else {
            return redirect("/");
        }
    }

    // Editar un cromo
    public function edit($idCromo)
    {
        $cromos=Cromo::findOrFail($idCromo);
        $albumContenido = Album::all();

        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            return view('admin.editCromo',compact('cromos'), compact('albumContenido'));
        } else {
            return redirect("/");
        }
    }

    public function update(Request $request,$idCromo)
    {
        $validarInfoFormCromo = [
            'nombre' => 'required|string|max:30',
            'descripcion' => 'required|string|max:400',
            'imgURL' => 'max:10000|mimes:jpg,jpeg,png'
        ];
        $Mensaje=['required' => 'El :attribute es requerido'];

        $this->validate($request, $validarInfoFormCromo, $Mensaje);
        //se capta toda la informacion y se desecha los datos de mas del form        
        $dataCromo=request()->except(['_token','_method']);

        $dataCromo['nombre'] = ucfirst( $dataCromo['nombre']);
        $dataCromo['descripcion'] = ucfirst( $dataCromo['descripcion']);

        $cromos=Cromo::findOrFail($idCromo);
        
        // se añade la ruta de la imagen y se borra la anterior
        if($request->hasFile('imgURL')){
            Storage::delete('public/'.$cromos->imgURL);
            $dataCromo['imgURL'] =$request->file('imgURL')->store('uploads','public');
        }
                
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
        $validarInfoFormCromo = [
            'nombre' => 'required|string|max:30|unique:cromo',
            'descripcion' => 'required|string|max:400',
            'imgURL' => 'required|max:10000|mimes:jpg,jpeg,png'
        ];
        $Mensaje=['required' => 'El :attribute es requerido'];

        $this->validate($request, $validarInfoFormCromo, $Mensaje);
        
        //$dataCromo=request()->all();
        $dataCromo=request()->except('_token');
        $dataCromo['nombre'] = ucfirst( $dataCromo['nombre']);
        $dataCromo['descripcion'] = ucfirst( $dataCromo['descripcion']);

        // Ruta de la imagen y carga en el sistema
        if($request->hasFile('imgURL')){
            $dataCromo['imgURL'] =$request->file('imgURL')->store('uploads','public');
        }

        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            Cromo::insert($dataCromo);
            //DB::table('album')->increment('cromosTotales', 1);
            return redirect('agregarCromo')->with('Mensaje', 'Cromo registrado correctamente');
        }else{
            return redirect('/');
        }

    }
    public function destroy($idCromo)
    {
        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){

            // borrado de la imagen
            $cromos=Cromo::findOrFail($idCromo);
            Storage::delete('public/'.$cromos->imgURL);

            Cromo::destroy($idCromo);
            //DB::table('album')->decrement('cromosTotales', 1);

            return redirect('agregarCromo')->with('Mensaje','Cromo eliminado del sistema');
        }else{
            return redirect('/');
        }
    }

}
