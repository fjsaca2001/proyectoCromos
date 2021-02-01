<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class CrearAlbumController extends Controller
{
    // función principal
    public function index()
    {           
        $albumContenido = Album::all();
        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            return view('admin.agregarAlbum', compact('albumContenido'));
        } else {
            return redirect("/");
        }
    }
    
    // eliminar album
    public function destroy($idAlbum)
    {
        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            Album::destroy($idAlbum);
            return redirect('agregarAlbum')->with('Mensaje','Álbum eliminado del sistema');
        }else{
            return redirect('/');
        }
    }
    // Crear album
    public function store(Request $request)
    {
        $validarInfoFormAlbum = [
            'nombre' => 'required|string|max:30|unique:album',
            'descripcion' => 'required|string|max:500',
        ];
        $Mensaje=['unique' => 'No puedes crear dos álbumes con el mismo nombre'];

        $this->validate($request, $validarInfoFormAlbum, $Mensaje);

        //$dataAlbum=request()->all();
        $dataAlbum=request()->except('_token');
        $dataAlbum['nombre'] = ucfirst( $dataAlbum['nombre']);
        $dataAlbum['descripcion'] = ucfirst( $dataAlbum['descripcion']);

        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            Album::insert($dataAlbum);
            return redirect('agregarAlbum')->with('Mensaje', 'Nuevo álbum registrado en el sistema');
        }else{
            return redirect('/');
        }

    }

    // Editar un cromo (Redireccionamiento)
    public function edit($idAlbum)
    {
        $albums=Album::findOrFail($idAlbum);

        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            return view('admin.editAlbum',compact('albums'));
        } else {
            return redirect("/");
        }
    }

    // Editar un cromo (Confirmacion)
    public function update(Request $request,$idAlbum)
    {
        $validarInfoFormAlbum = [
            'nombre' => 'required|string|max:30',
            'descripcion' => 'required|string|max:500',
        ];
        $Mensaje=['required' => 'El :attribute es requerido'];

        $this->validate($request, $validarInfoFormAlbum, $Mensaje);

        //se capta toda la informacion y se desecha los datos de mas del form        
        $dataAlbum=request()->except(['_token','_method']);
        
        $dataAlbum['nombre'] = ucfirst( $dataAlbum['nombre']);
        $dataAlbum['descripcion'] = ucfirst( $dataAlbum['descripcion']);

        $albums=Album::findOrFail($idAlbum);
                
        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            Album::where('idAlbum','=',$idAlbum)->update($dataAlbum);
            return redirect('agregarAlbum')->with('Mensaje','Información del álbum actualizada correctamente');
        }else{
            return redirect('/');
        }
    }
}
