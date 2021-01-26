<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use App\Models\Tematica;
use App\Models\Pregunta;
use App\Models\Album;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
        
    }
    public function show($idenviado)
    {   
        $idenviado = intval($idenviado);
        $actividad = Actividad::find($idenviado);
        return view('internas.test',compact ('actividad'));
    }

    public function store(Request $request )
    {   
        $correctas = 0;
        $cantidadPreguntas= $request->input('numeroPreg');

        if(! ($request->input('question') == NULL) ) {
            $array = array_values($request->input('question'));
            
            foreach($array as $array2) {
                if( $array2 == "correcta") {
                    $correctas = $correctas +1;
                }
            }
        }
    
        // Buscar la actividad mediante idactividad (enviado desde test)
        $valorInputActiv= $request->input('valorInputActiv');
        $resultActividad = Actividad::find($valorInputActiv);

        $valorInputUser= $request->input('valorInputUser');
        $arrayCromosDesbloqueados = Array();

        // Reparticion de cromos
        // 100%
        if($correctas == $cantidadPreguntas){
            foreach( $resultActividad->cromos as $cromo){
                if(DB::table('desbloqueado')
                            ->where('idAlbum', $cromo->tematica->album->idAlbum)
                            ->where('idCromo', $cromo->idCromo)
                            ->where('idUsuario', $valorInputUser)->doesntExist() ){
                    DB::table('desbloqueado')->insert([
                        'idAlbum' => $cromo->tematica->album->idAlbum,
                        'idCromo' => $cromo->idCromo,
                        'idUsuario' => $valorInputUser
                    ]);
                }
                $arrayCromosDesbloqueados[] = array($cromo->idCromo, $cromo->imgURL, $cromo->nombre);
            }
           // Si no obiene el 100%, entonces...
        } else{
            $porcentaje = ($correctas/$cantidadPreguntas)*100;
            $cantidadCromos = count($resultActividad->cromos);
            $contador = 0;
            if( $porcentaje <=30){
                foreach( $resultActividad->cromos as $cromo){
                    $contador++;
                    if($contador <= $cantidadCromos*0.255){
                        if(DB::table('desbloqueado')
                            ->where('idAlbum', $cromo->tematica->album->idAlbum)
                            ->where('idCromo', $cromo->idCromo)
                            ->where('idUsuario', $valorInputUser)->doesntExist() ){
                            DB::table('desbloqueado')->insert([
                                'idAlbum' => $cromo->tematica->album->idAlbum,
                                'idCromo' => $cromo->idCromo,
                                'idUsuario' => $valorInputUser
                            ]);
                        }
                        $arrayCromosDesbloqueados[] = array($cromo->idCromo, $cromo->imgURL, $cromo->nombre);
                    } else {
                        break;
                    }
                }
            }
            elseif($porcentaje > 30 && $porcentaje <50){
                foreach( $resultActividad->cromos as $cromo){
                    $contador++;
                    if($contador <= $cantidadCromos*0.34){
                        if(DB::table('desbloqueado')
                            ->where('idAlbum', $cromo->tematica->album->idAlbum)
                            ->where('idCromo', $cromo->idCromo)
                            ->where('idUsuario', $valorInputUser)->doesntExist() ){
                            DB::table('desbloqueado')->insert([
                                'idAlbum' => $cromo->tematica->album->idAlbum,
                                'idCromo' => $cromo->idCromo,
                                'idUsuario' => $valorInputUser
                            ]);
                        }
                        $arrayCromosDesbloqueados[] = array($cromo->idCromo, $cromo->imgURL, $cromo->nombre);
                    } else {
                        break;
                    }
                }
            }
            elseif($porcentaje >= 50 && $porcentaje <= 60){
                foreach( $resultActividad->cromos as $cromo){
                    $contador++;
                    if($contador <= $cantidadCromos*0.50){
                        if(DB::table('desbloqueado')
                            ->where('idAlbum', $cromo->tematica->album->idAlbum)
                            ->where('idCromo', $cromo->idCromo)
                            ->where('idUsuario', $valorInputUser)->doesntExist() ){
                            DB::table('desbloqueado')->insert([
                                'idAlbum' => $cromo->tematica->album->idAlbum,
                                'idCromo' => $cromo->idCromo,
                                'idUsuario' => $valorInputUser
                            ]);
                        }
                        $arrayCromosDesbloqueados[] = array($cromo->idCromo, $cromo->imgURL, $cromo->nombre);
                    } else {
                        break;
                    }
                }
            }elseif($porcentaje > 60 && $porcentaje <= 75){
                foreach( $resultActividad->cromos as $cromo){
                    $contador++;
                    if($contador <= $cantidadCromos*0.75){
                        if(DB::table('desbloqueado')
                            ->where('idAlbum', $cromo->tematica->album->idAlbum)
                            ->where('idCromo', $cromo->idCromo)
                            ->where('idUsuario', $valorInputUser)->doesntExist() ){
                            DB::table('desbloqueado')->insert([
                                'idAlbum' => $cromo->tematica->album->idAlbum,
                                'idCromo' => $cromo->idCromo,
                                'idUsuario' => $valorInputUser
                            ]);
                        }
                        $arrayCromosDesbloqueados[] = array($cromo->idCromo, $cromo->imgURL, $cromo->nombre);
                    } else {
                        break;
                    }
                }
            } elseif($porcentaje > 75 && $porcentaje < 85){
                foreach( $resultActividad->cromos as $cromo){
                    $contador++;
                    if($contador <= $cantidadCromos*0.85){
                        if(DB::table('desbloqueado')
                            ->where('idAlbum', $cromo->tematica->album->idAlbum)
                            ->where('idCromo', $cromo->idCromo)
                            ->where('idUsuario', $valorInputUser)->doesntExist() ){
                            DB::table('desbloqueado')->insert([
                                'idAlbum' => $cromo->tematica->album->idAlbum,
                                'idCromo' => $cromo->idCromo,
                                'idUsuario' => $valorInputUser
                            ]);
                        }
                        $arrayCromosDesbloqueados[] = array($cromo->idCromo, $cromo->imgURL, $cromo->nombre);
                    } else {
                        break;
                    }
                }
            } elseif($porcentaje > 85 && $porcentaje < 100){
                foreach( $resultActividad->cromos as $cromo){
                    $contador++;
                    if($contador <= $cantidadCromos*0.9){
                        if(DB::table('desbloqueado')
                            ->where('idAlbum', $cromo->tematica->album->idAlbum)
                            ->where('idCromo', $cromo->idCromo)
                            ->where('idUsuario', $valorInputUser)->doesntExist() ){
                            DB::table('desbloqueado')->insert([
                                'idAlbum' => $cromo->tematica->album->idAlbum,
                                'idCromo' => $cromo->idCromo,
                                'idUsuario' => $valorInputUser
                            ]);
                        }
                        $arrayCromosDesbloqueados[] = array($cromo->idCromo, $cromo->imgURL, $cromo->nombre);
                    } else {
                        break;
                    }
                }
            }
        }
              
        return view('internas.resultado', compact('correctas', 'cantidadPreguntas', 'arrayCromosDesbloqueados', ) );

    }
}
