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

Route::get('/', 'App\Http\Controllers\BienvenidaController@index') ;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/inicio', 'App\Http\Controllers\InicioController@index')->name('inicio');
Route::get('/GestorProyectos', 'App\Http\Controllers\GestorProyectosController@index')->name('GestorProyectos');
Route::post('/GestorProyectos', 'App\Http\Controllers\GestorProyectosController@store')->name('GestorProyectos.store');
Route::get('/GestorProyectos/crear', 'App\Http\Controllers\GestorProyectosController@create')->name('NuevoProyecto');
Route::get('/GestorProyectos/{proyecto}/editar', 'App\Http\Controllers\GestorProyectosController@edit')->name('GestorProyectos.edit');
Route::patch('/GestorProyectos/{proyecto}', 'App\Http\Controllers\GestorProyectosController@update')->name('GestorProyectos.update');

Route::delete('/GestorProyectos/{proyecto}/eliminar', 'App\Http\Controllers\GestorProyectosController@destroy')->name('GestorProyectos.destroy');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('inicio');

require __DIR__.'/auth.php';


Route::post('/diseño/{proyecto}', 'App\Http\Controllers\DiseñoController@store')->name('diseño.store');

Route::post('/diseño/instruccional/{proyecto}', 'App\Http\Controllers\DiseñoController@store_instruccional')->name('diseño.store_instruccional');

Route::get('/diseño/{id}', 'App\Http\Controllers\DiseñoController@index')->name('diseño');

Route::patch('/diseño/{id},{subetapa},{instruccional}/editar', 'App\Http\Controllers\DiseñoController@update_instruccional')->name('diseño.update_instruccional');


Route::get('/creacion', 'App\Http\Controllers\CreacionController@index')->name('creacion');
Route::post('/creacion', 'App\Http\Controllers\CreacionController@crear')->name('creacion');
Route::get('/edicion', 'App\Http\Controllers\EdicionController@index')->name('edicion');

Route::get('/principal/{id}', 'App\Http\Controllers\PrincipalController@index')->name('principal'); 
// Esta ruta recibe como parametro el id del proyecto en cuestión

Route::get('/definicion', 'App\Http\Controllers\DefinicionController@index')->name('definicion');

Route::post('/analisis/{proyecto}', 'App\Http\Controllers\AnalisisController@store')->name('analisis.store');
Route::get('/analisis/{id}', 'App\Http\Controllers\AnalisisController@index')->name('analisis');

Route::get('/analisis/{id}/editar', 'App\Http\Controllers\AnalisisController@edit')->name('analisis.edit');
Route::patch('/analisis/{analisis}', 'App\Http\Controllers\AnalisisController@update')->name('analisis.update');


Route::get('/coherencia', 'App\Http\Controllers\CoherenciaController@index')->name('coherencia');
Route::get('/desarrollo', 'App\Http\Controllers\DesarrolloController@index')->name('desarrollo');
Route::get('/publicacion', 'App\Http\Controllers\PublicacionController@index')->name('publicacion');
Route::get('/evaluacion', 'App\Http\Controllers\EvaluacionController@index')->name('evaluacion');
Route::get('/configuracion', 'App\Http\Controllers\ConfiguracionController@index')->name('configuracion');
/*Route::get('/ayuda', 'AyudaController@index')->name('ayuda');
Route::get('/visualizacion', 'VisualizacionController@index')->name('visualizacion');*/

// Route::get('/login', 'App\Http\Controllers\Auth\AuthenticatedSessionController@create')->name('login');
// Route::get('/register', 'App\Http\Controllers\Auth\AuthenticatedSessionController@create')->name('login');












// Route::get('/etapas', function () {
    // return 'Etapas';
// });

//parámetro dinámico
// Route::get('/etapas/{id}', function ($id) {
    // return "Etapa nro: {$id}";
// });

//parámetro dinámico y filtro
// Route::get('/documentos/{nro}', function ($nro) {
    // return "Doc nro: {$nro}";
// })->where('nro','[0-9]+');

//parámetro dinámico opcional
// Route::get('/detalles/{desc?}', function ($desc = null) {
    
    // if ($desc) {
        // return "Descripción del detalle: {$desc}";
    // } else {
        // return "Sin descripción";
    // }
// });