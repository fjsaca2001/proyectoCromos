<?php

namespace App\Http\Controllers;
use App\Models\Album;
use App\Models\Actividad;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class CrearActividadController extends Controller
{
    // funcion por defecto
    public function index()
    {           
        $albumContenido = Album::all();
        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            return view('admin.crearActividad', compact('albumContenido'));
        } else {
            return redirect("/");
        }
    }

    // eliminar album
    public function destroy($idActividad)
    {
        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            Actividad::destroy($idActividad);
            return redirect('crearActividad')->with('Mensaje','Actividad eliminada con exito');
        }else{
            return redirect('/');
        }
    }

    // Crear actividad
    public function store(Request $request)
    {
        $validarInfoFormActv = [
            'nombreActividad' => 'required|string|max:40|unique:actividad',
        ];
        $Mensaje=['required' => 'El :attribute es requerido'];

        $this->validate($request, $validarInfoFormActv, $Mensaje);
        
        //$dataActividad=request()->all();
        $dataActividad=request()->except('_token');
        $dataActividad['nombreActividad'] = ucwords( $dataActividad['nombreActividad'] ,"----_/" );
        
        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            Actividad::insert($dataActividad);
            return redirect('crearActividad')->with('Mensaje', 'Actividad registrada correctamente');
        }else{
            return redirect('/');
        }

    }

    // Editar una actividad (Redireccionamiento)
    public function edit($idActividad)
    {
        $albumContenido = Album::all();
        $actividades=Actividad::findOrFail($idActividad);

        $actividades['nombreActividad'] = ucwords( $actividades['nombreActividad'] ,"----_/" );

        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            return view('admin.editActividad', compact('actividades'), compact('albumContenido'));
        } else {
            return redirect("/");
        }
    }

    // Editar una actividad (Confirmacion)
    public function update(Request $request,$idActividad)
    {
        $validarInfoFormActv = [
            'nombreActividad' => 'required|string|max:40',
        ];
        $Mensaje=['required' => 'El :attribute es requerido'];

        $this->validate($request, $validarInfoFormActv, $Mensaje);

        //se capta toda la informacion y se desecha los datos de mas del form        
        $dataActividad=request()->except(['_token','_method']);
        $dataActividad['nombreActividad'] = ucwords( $dataActividad['nombreActividad'] ,"----_/" );

        $actividades=Actividad::findOrFail($idActividad);
                
        // Si es admin o super
        if(Gate::allows('acciones-admin') || Gate::allows('acciones-super')){
            Actividad::where('idActividad','=',$idActividad)->update($dataActividad);
            return redirect('crearActividad')->with('Mensaje','Actividad modificada con éxito');
        }else{
            return redirect('/');
        }
    }
}
