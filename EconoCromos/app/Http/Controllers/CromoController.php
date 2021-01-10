<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cromo;


class CromoController extends Controller
{
    public function index()
    {
        $datos['cromo']=Cromo::paginate(10);

        return view('admin.agregarCromo',$datos);
    }
    // Editar un cromo
    public function edit($idCromo)
    {
        $cromos=Cromo::findOrFail($idCromo);
        return view('admin.editCromo',compact('cromos'));
    }
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
    // crear el cromo despues de validar
    protected function create(array $data)
    {
        return Cromo::create([  
            'descripcion' => 'Álbum de economía',   
            'nombre' => 'EconoCromos',   
            'cromosTotales' => '180'
        ]);
    }
    
    public function destroy($idCromo)
    {
        //
        Cromo::destroy($idCromo);
        return redirect('agregarCromo')->with('Mensaje','Usuario eliminado con exito');
    }

}
