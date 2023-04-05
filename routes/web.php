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

Route::get('/', 'App\Http\Controllers\BienvenidaController@index')->name('bienvenida');

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
Route::get('/diseño/instruccional/{id}/generar_pdf','App\Http\Controllers\InstruccionalController@generar_pdf')->name('instruccional.pdf');


Route::patch('/diseño/estructura/{proyecto},{estructura?}/editar', 'App\Http\Controllers\EstructuraController@update')->name('estructura.update');
Route::post('/diseño/estructura/{proyecto}', 'App\Http\Controllers\EstructuraController@store')->name('estructura.store');
Route::get('/diseño/estructura/{id}/generar_pdf','App\Http\Controllers\EstructuraController@generar_pdf')->name('estructura.pdf');


Route::patch('/diseño/multimedial/{proyecto}/editar', 'App\Http\Controllers\MultimedialController@update')->name('multimedial.update');
Route::post('/diseño/multimedial/{proyecto}', 'App\Http\Controllers\MultimedialController@store')->name('multimedial.store');
Route::get('/diseño/multimedial/{id}/generar_pdf','App\Http\Controllers\MultimedialController@generar_pdf')->name('multimedial.pdf');


Route::get('/creacion', 'App\Http\Controllers\CreacionController@index')->name('creacion');
// Route::post('/creacion', 'App\Http\Controllers\CreacionController@crear')->name('creacion');
Route::get('/edicion', 'App\Http\Controllers\EdicionController@index')->name('edicion');

Route::get('/principal/{id}', 'App\Http\Controllers\PrincipalController@index')->name('principal'); 
// Esta ruta recibe como parametro el id del proyecto en cuestión

Route::get('/definicion', 'App\Http\Controllers\DefinicionController@index')->name('definicion');

Route::patch('/analisis/{proyecto}','App\Http\Controllers\AnalisisController@update')->name('analisis.update');
Route::post('/analisis/{proyecto},','App\Http\Controllers\AnalisisController@store')->name('analisis.store');
Route::get('/analisis/{proyecto}','App\Http\Controllers\AnalisisController@index')->name('analisis');
Route::get('/analisis/{id}/editar','App\Http\Controllers\AnalisisController@edit')->name('analisis.edit');

Route::get('/analisis/{id}/generar_pdf','App\Http\Controllers\AnalisisController@generar_pdf')->name('analisis.pdf');




Route::get('/coherencia/index/{proyecto}', 'App\Http\Controllers\CoherenciaController@index')->name('coherencia');
Route::post('/coherencia/store/{proyecto}', 'App\Http\Controllers\CoherenciaController@store')->name('coherencia.store');
Route::get('/coherencia/edit/{proyecto}/editar', 'App\Http\Controllers\CoherenciaController@edit')->name('coherencia.edit');
Route::patch('/coherencia/update/{proyecto?}', 'App\Http\Controllers\CoherenciaController@update')->name('coherencia.update');




Route::get('/publicacion/{proyecto}', 'App\Http\Controllers\PublicacionController@index')->name('publicacion');
Route::get('/evaluacion', 'App\Http\Controllers\EvaluacionController@index')->name('evaluacion');
Route::get('/configuracion', 'App\Http\Controllers\ConfiguracionController@index')->name('configuracion');


// DESARROLLO

Route::get('/desarrollo/index/{proyecto}{scorm?}', 'App\Http\Controllers\DesarrolloController@index')->name('desarrollo');

// Route::post('/desarrollo/general/{proyecto}', 'App\Http\Controllers\metadatos\GeneralController@store')->name('metadatos.general.store');

Route::post('/desarrollo/crear/{proyecto}', 'App\Http\Controllers\DesarrolloController@create')->name('desarrollo.create');


    //METADATOS_GENERAL 
Route::patch('/desarrollo/metadatos/general/actualizar/{proyecto}', 'App\Http\Controllers\metadatos\GeneralController@update')->name('metadatos.general.update');

Route::post('/desarrollo/metadatos/general/guardar/{proyecto}', 'App\Http\Controllers\metadatos\GeneralController@store')->name('metadatos.general.store');


//METADATOS_CICLO


Route::patch('/desarrollo/metadatos/ciclo/actualizar/{proyecto}', 'App\Http\Controllers\metadatos\CicloController@update')->name('metadatos.ciclo.update');

Route::post('/desarrollo/metadatos/ciclo/guardar/{proyecto}', 'App\Http\Controllers\metadatos\CicloController@store')->name('metadatos.ciclo.store');

//METADATOS_META-METADATOS

Route::patch('/desarrollo/metadatos/metametadatos/actualizar/{proyecto}', 'App\Http\Controllers\metadatos\MetametadatosController@update')->name('metadatos.metametadatos.update');

Route::post('/desarrollo/metadatos/metametadatos/guardar/{proyecto}', 'App\Http\Controllers\metadatos\MetametadatosController@store')->name('metadatos.metametadatos.store');

//METADATOS_TECNICA

Route::patch('/desarrollo/metadatos/tecnica/actualizar/{proyecto}', 'App\Http\Controllers\metadatos\TecnicaController@update')->name('metadatos.tecnica.update');

Route::post('/desarrollo/metadatos/tecnica/guardar/{proyecto}', 'App\Http\Controllers\metadatos\TecnicaController@store')->name('metadatos.tecnica.store');

//METADATOS_EDUCACIONAL

Route::patch('/desarrollo/metadatos/educacional/actualizar/{proyecto}', 'App\Http\Controllers\metadatos\EducacionalController@update')->name('metadatos.educacional.update');

Route::post('/desarrollo/metadatos/educacional/guardar/{proyecto}', 'App\Http\Controllers\metadatos\EducacionalController@store')->name('metadatos.educacional.store');

//METADATOS_DERECHO

Route::patch('/desarrollo/metadatos/derechos/actualizar/{proyecto}', 'App\Http\Controllers\metadatos\DerechosController@update')->name('metadatos.derechos.update');

Route::post('/desarrollo/metadatos/derechos/guardar/{proyecto}', 'App\Http\Controllers\metadatos\DerechosController@store')->name('metadatos.derechos.store');


//METADATOS_RELACION

Route::patch('/desarrollo/metadatos/relacion/actualizar/{proyecto}', 'App\Http\Controllers\metadatos\RelacionController@update')->name('metadatos.relacion.update');

Route::post('/desarrollo/metadatos/relacion/guardar/{proyecto}', 'App\Http\Controllers\metadatos\RelacionController@store')->name('metadatos.relacion.store');

//METADATOS_ANOTACIONES

Route::patch('/desarrollo/metadatos/anotaciones/actualizar/{proyecto}', 'App\Http\Controllers\metadatos\AnotacionesController@update')->name('metadatos.anotaciones.update');

Route::post('/desarrollo/metadatos/anotaciones/guardar/{proyecto}', 'App\Http\Controllers\metadatos\AnotacionesController@store')->name('metadatos.anotaciones.store');

//METADATOS_CLASIFICACION

Route::patch('/desarrollo/metadatos/clasificacion/actualizar/{proyecto}', 'App\Http\Controllers\metadatos\ClasificacionController@update')->name('metadatos.clasificacion.update');

Route::post('/desarrollo/metadatos/clasificacion/guardar/{proyecto}', 'App\Http\Controllers\metadatos\ClasificacionController@store')->name('metadatos.clasificacion.store');


//DESARROLLO_IMPLEMENTACION
Route::post('/implementacion/{proyecto}','App\Http\Controllers\ScormController@store')->name('scorm.store');
Route::get('/implemetacion/importar{proyecto}', 'App\Http\Controllers\DesarrolloController@importar')->name('desarrollo.importar');
Route::get('/implemetacion/nueva{proyecto}', 'App\Http\Controllers\DesarrolloController@nueva')->name('desarrollo.nueva');


// Del Gestor de Archivos de Laravel
// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//      \UniSharp\LaravelFilemanager\Lfm::routes();
//  });
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
//Route Hooks - Do not delete//
	Route::view('proyectos', 'livewire.proyectos.index')->middleware('auth');
	Route::view('mapeos', 'livewire.mapeos.index')->middleware('auth')->name('mapeos');

    