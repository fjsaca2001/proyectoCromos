<?php

use App\Models\usuarios;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::view('/', 'home')->name('home');//para paginas con poca logica
Route::view('/usuarios', 'admin.adminindex')->name('usuarios');
Route::view('/resultado', 'internas.resultado')->name('resultado');

Route::resource('/usuarios', 'App\Http\Controllers\UsuariosController')->middleware('auth');
Route::resource('/album', 'App\Http\Controllers\AlbumController')->middleware('auth');
Route::resource('/agregarPregunta', 'App\Http\Controllers\PreguntaController')->middleware('auth');
Route::resource('/agregarCromo', 'App\Http\Controllers\CromoController')->middleware('auth');

Route::resource('/agregarAlbum', 'App\Http\Controllers\CrearAlbumController')->middleware('auth');
Route::resource('/crearActividad', 'App\Http\Controllers\CrearActividadController')->middleware('auth');
Route::resource('/crearTematica', 'App\Http\Controllers\CrearTematicaController')->middleware('auth');
Route::resource('/test', 'App\Http\Controllers\TestController')->middleware('auth');


// Route::group(['middleware' => 'admin'], function () {
//     Route::view('/usuarios', 'admin.adminindex')->name('usuarios');
// Route::resource('/usuarios', 'App\Http\Controllers\UsuariosController');

// });
Route::resource('/actividades','App\Http\Controllers\ActividadController');
Route::view('album','usuario.album')->name('album')->middleware('auth');;
Route::view('contactos','internas.contactos')->name('contactos');
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');
Route::get('/album', [App\Http\Controllers\AlbumController::class, 'index'])->name('album');

Route::get('/test', [App\Http\Controllers\TestController::class, 'store'])->name('test.store');

// Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
