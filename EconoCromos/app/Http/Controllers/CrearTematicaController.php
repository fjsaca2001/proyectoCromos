<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Tematica;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class CrearTematicaController extends Controller
{
    // funcion por defecto
    public function index()
    {           
        $albumContenido = Album::all();
        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            return view('admin.agregarTematica', compact('albumContenido'));
        } else {
            return redirect("/");
        }
    }

    // Eliminar temática
    public function destroy($idTematica)
    {
        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){

            $tematicas=Tematica::findOrFail($idTematica);
            Storage::delete('public/'.$tematicas->imgTematica);

            Tematica::destroy($idTematica);
            return redirect('crearTematica')->with('Mensaje','Temática eliminada del sistema');
        }else{
            return redirect('/');
        }
    }
    // Crear temática
    public function store(Request $request)
    {
        $validarInfoFormTemat = [
            'nombreTematica' => 'required|string|max:25|unique:tematica',
            'descripcion' => 'required|string|max:500',
            'imgTematica' => 'required|max:10000|mimes:jpg,jpeg,png'
        ];
        $Mensaje=['required' => 'El :attribute es requerido'];

        $this->validate($request, $validarInfoFormTemat, $Mensaje);
        
        //$dataTematica=request()->all();
        $dataTematica=request()->except('_token');
        $dataTematica['nombreTematica'] = ucfirst( $dataTematica['nombreTematica']);
        $dataTematica['descripcion'] = ucfirst( $dataTematica['descripcion']);

        // Ruta de la imagen y carga en el sistema
        if($request->hasFile('imgTematica')){
            $dataTematica['imgTematica'] =$request->file('imgTematica')->store('uploads','public');
        }

        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            Tematica::insert($dataTematica);
            return redirect('crearTematica')->with('Mensaje', 'Tematica registrada correctamente');
        }else{
            return redirect('/');
        }

    }

    // Editar una temática (Redireccionamiento)
    public function edit($idTematica)
    {
        $tematicas=Tematica::findOrFail($idTematica);
        $albumContenido = Album::all();
        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            return view('admin.editTematica',compact('tematicas'), compact('albumContenido'));
        } else {
            return redirect("/");
        }
    }

    public function update(Request $request,$idTematica)
    {
        $validarInfoFormTemat = [
            'nombreTematica' => 'required|string|max:25',
            'descripcion' => 'required|string|max:500',
            'imgTematica' => 'max:10000|mimes:jpg,jpeg,png'
        ];
        $Mensaje=['required' => 'El :attribute es requerido'];

        $this->validate($request, $validarInfoFormTemat, $Mensaje);

        //se capta toda la informacion y se desecha los datos de mas del form        
        $dataTematica=request()->except(['_token','_method']);
        
        $dataTematica['nombreTematica'] = ucfirst( $dataTematica['nombreTematica']);
        $dataTematica['descripcion'] = ucfirst( $dataTematica['descripcion']);
        
        $tematicas=Tematica::findOrFail($idTematica);

        // se añade la ruta de la imagen y se borra la anterior
        if($request->hasFile('imgTematica')){
            Storage::delete('public/'.$tematicas->imgTematica);
            $dataTematica['imgTematica'] =$request->file('imgTematica')->store('uploads','public');
        }
                
        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            Tematica::where('idTematica','=',$idTematica)->update($dataTematica);
            return redirect('crearTematica')->with('Mensaje','Información de la temática actualizada correctamente');
        }else{
            return redirect('/');
        }
    }
}
