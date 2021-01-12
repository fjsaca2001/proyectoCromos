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
Route::view('/', 'home')->name('home');//para paginas con poca logica
Route::view('/usuarios', 'admin.adminindex')->name('usuarios');
Route::resource('/usuarios', 'App\Http\Controllers\UsuariosController')->middleware('auth');
Route::resource('/album', 'App\Http\Controllers\AlbumController')->middleware('auth');
Route::resource('/agregarPregunta', 'App\Http\Controllers\PreguntaController')->middleware('auth');
Route::resource('/agregarCromo', 'App\Http\Controllers\CromoController')->middleware('auth');
Route::resource('/agregarRespuesta', 'App\Http\Controllers\RespuestaController')->middleware('auth');

// Route::group(['middleware' => 'admin'], function () {
//     Route::view('/usuarios', 'admin.adminindex')->name('usuarios');
// Route::resource('/usuarios', 'App\Http\Controllers\UsuariosController');

// });
Route::view('actividades','internas.actividades')->name('actividades');
Route::view('album','usuario.album')->name('album')->middleware('auth');
Route::view('perfil','usuario.perfil')->name('perfil')->middleware('auth');
Route::view('contactos','internas.contactos')->name('contactos');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');
Route::get('/album', [App\Http\Controllers\AlbumController::class, 'index'])->name('album');

// Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
