<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\ListarController;

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

//Pagina principal para crear Formulario
Route::get('/Permiso',[ListarController::class, 'index'])->name('index.mostrar2');

//Llenamos los cuadros de tecto con datos de la base de datos
Route::get('/PermisoCi',[ListarController::class, 'filtrarPermiso'])->name('index.mostrar');

//Creamos un permiso para guardarlo en la base de datos
Route::post('/Permiso/create',[PermisoController::class, 'store'])->name('create.permiso');

//Ruta para guardar o imprimir pdf con el permiso
Route::get('/Permiso/pdf', [ListarController::class, 'pdf'])->name('permiso.pdf');

//Mostrar La pantalla del intranet temporal
Route::get('/intranet', [PermisoController::class, 'intranet'])->name('volver.inicio');

//Mostramos pagina de permisos y se pueden buscar por cedula
Route::get('Mostrar',[ListarController::class, 'mostrarPermiso'])->name('index.listado');

//Mostramos todos los permisos de una cedula especifica
Route::get('MostrarCi',[ListarController::class, 'buscarPermiso'])->name('index.listadoCi');

//Con esto mostramos cada permiso asociado a dicha persona
Route::get('/Mostrar/Permiso/{id}',[ListarController::class, 'showId'])->name('id.listar');

//Ruta para imprimir pdf especifico de cualquier permiso
Route::get('Mostrar/pdf/{id}',[ListarController::class, 'showpdfid'])->name('id.pdf');

//Route::get('/Permiso',[ListarController::class, 'index'])->name('index.ver');
