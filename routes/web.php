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


Route::delete('/Mapeo/{id}/eliminar', 'App\Http\Controllers\MapeoController@destroy')->name('mapeo.destroy');

Route::post('/diseño/{proyecto}', 'App\Http\Controllers\DiseñoController@store')->name('diseño.store');



Route::get('/diseño/{id}', 'App\Http\Controllers\DiseñoController@index')->name('diseño');

Route::patch('/diseño/instruccional/{proyecto}/editar', 'App\Http\Controllers\InstruccionalController@update')->name('instruccional.update');
Route::post('/diseño/instruccional/{proyecto}', 'App\Http\Controllers\InstruccionalController@store')->name('instruccional.store');

Route::patch('/diseño/estructura/{proyecto},{estructura?}/editar', 'App\Http\Controllers\EstructuraController@update')->name('estructura.update');
Route::post('/diseño/estructura/{proyecto}', 'App\Http\Controllers\EstructuraController@store')->name('estructura.store');

Route::patch('/diseño/multimedial/{proyecto}/editar', 'App\Http\Controllers\MultimedialController@update')->name('multimedial.update');
Route::post('/diseño/multimedial/{proyecto}', 'App\Http\Controllers\MultimedialController@store')->name('multimedial.store');


Route::get('/creacion', 'App\Http\Controllers\CreacionController@index')->name('creacion');
Route::post('/creacion', 'App\Http\Controllers\CreacionController@crear')->name('creacion');
Route::get('/edicion', 'App\Http\Controllers\EdicionController@index')->name('edicion');

Route::get('/principal/{id}', 'App\Http\Controllers\PrincipalController@index')->name('principal'); 
// Esta ruta recibe como parametro el id del proyecto en cuestión

Route::get('/definicion', 'App\Http\Controllers\DefinicionController@index')->name('definicion');




Route::patch('/analisis/{proyecto}','App\Http\Controllers\AnalisisController@update')->name('analisis.update');
Route::post('/analisis/{proyecto}','App\Http\Controllers\AnalisisController@store')->name('analisis.store');
Route::get('/analisis/{proyecto}','App\Http\Controllers\AnalisisController@index')->name('analisis');
Route::get('/analisis/{id}/editar','App\Http\Controllers\AnalisisController@edit')->name('analisis.edit');


Route::get('/coherencia/{proyecto}', 'App\Http\Controllers\CoherenciaController@index')->name('coherencia');
Route::post('/coherencia/{proyecto}', 'App\Http\Controllers\CoherenciaController@store')->name('coherencia.store');
Route::get('/coherencia/{id}/editar', 'App\Http\Controllers\CoherenciaController@edit')->name('coherencia.edit');
Route::patch('/coherencia/{proyecto?}', 'App\Http\Controllers\CoherenciaController@update')->name('coherencia.update');




Route::get('/publicacion', 'App\Http\Controllers\PublicacionController@index')->name('publicacion');
Route::get('/evaluacion', 'App\Http\Controllers\EvaluacionController@index')->name('evaluacion');
Route::get('/configuracion', 'App\Http\Controllers\ConfiguracionController@index')->name('configuracion');
/*Route::get('/ayuda', 'AyudaController@index')->name('ayuda');
Route::get('/visualizacion', 'VisualizacionController@index')->name('visualizacion');*/

// Route::get('/login', 'App\Http\Controllers\Auth\AuthenticatedSessionController@create')->name('login');
// Route::get('/register', 'App\Http\Controllers\Auth\AuthenticatedSessionController@create')->name('login');


// DESARROLLO

Route::get('/desarrollo/{proyecto}', 'App\Http\Controllers\DesarrolloController@index')->name('desarrollo');

// Route::post('/desarrollo/general/{proyecto}', 'App\Http\Controllers\metadatos\GeneralController@store')->name('metadatos.general.store');

Route::post('/desarrollo/crear/{proyecto}', 'App\Http\Controllers\DesarrolloController@create')->name('desarrollo.create');


    //METADATOS_GENERAL 
Route::patch('/desarrollo/metadatos/general/actualizar/{proyecto}', 'App\Http\Controllers\metadatos\GeneralController@update')->name('metadatos.general.update');

Route::post('/desarrollo/metadatos/general/guardar/{proyecto}', 'App\Http\Controllers\metadatos\GeneralController@store')->name('metadatos.general.store');


    //METADATOS_CICLO


Route::patch('/desarrollo/metadatos/ciclo/actualizar/{proyecto}', 'App\Http\Controllers\metadatos\CicloController@update')->name('metadatos.ciclo.update');

Route::post('/desarrollo/metadatos/ciclo/guardar/{proyecto}', 'App\Http\Controllers\metadatos\CicloController@store')->name('metadatos.ciclo.store');





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