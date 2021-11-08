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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('inicio');

require __DIR__.'/auth.php';


Route::get('/creacion', 'App\Http\Controllers\CreacionController@index')->name('creacion');
Route::post('/creacion', 'App\Http\Controllers\CreacionController@crear')->name('creacion');
Route::get('/edicion', 'App\Http\Controllers\EdicionController@index')->name('edicion');

Route::get('/principal', 'App\Http\Controllers\PrincipalController@index')->name('principal');

Route::get('/definicion', 'App\Http\Controllers\DefinicionController@index')->name('definicion');
Route::get('/analisis', 'App\Http\Controllers\AnalisisController@index')->name('analisis');
Route::get('/diseño', 'App\Http\Controllers\DiseñoController@index')->name('diseño');
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