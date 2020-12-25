<?php

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
Route::resource('usuarios', 'App\Http\Controllers\UsuariosController');
Route::view('/actividades','internas.actividades')->name('actividades');
Route::view('/album','internas.album')->name('album');
Route::view('/contactos','internas.contactos')->name('contactos');