<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\DirectorioController;
use App\Http\Controllers\HomeController;
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

//RUTAS DE LANDING PAGE
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//RUTAS ADMINISTRADOR
Route::get('Administrador_LauNET/perfil', [AdministradorController::class, 'perfil'])->name('Administrador_LauNET.perfil');


//RUTAS DOCUMENTOS LAUMAYER

//1. DIRECTORIO
Route::get('Directorio', [DirectorioController::class, 'index'])->name('directorio.index');
Route::get('Directorio/create', [DirectorioController::class, 'create'])->name('directorio.create');
Route::post('Directorio', [DirectorioController::class, 'store'])->name('directorio.store');
Route::get('Directorio/{directorio}', [DirectorioController::class, 'show'])->name('directorio.show');