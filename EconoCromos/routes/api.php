<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/agregarPregunta/{id}/album',[App\Http\Controllers\PreguntaController::class, 'byTematicas']);
Route::get('/agregarPregunta/{id}/actividades',[App\Http\Controllers\PreguntaController::class, 'byActividades']);
// Route::get('/actividades/{id}/actividades',[App\Http\Controllers\TematicaController::class, 'byActividades']);
Route::get('/agregarActividad/{id}/tematicas',[App\Http\Controllers\CrearActividadController::class, 'byTematicas']);