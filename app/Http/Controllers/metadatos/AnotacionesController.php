<?php

namespace App\Http\Controllers\metadatos;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAnotacionesRequest;
use App\Http\Requests\UpdateAnotacionesRequest;
use App\Models\Anotaciones;
use App\Models\Proyecto;
use Illuminate\Http\Request;


class AnotacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

       }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnotacionesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Proyecto $proyecto, Request $request)
    {
        $proyecto->desarrollo->metadatos->anotaciones()->create([
      'anotaciones_p1_anot_1'=>request('anotaciones_p1_anot_1'),
      'anotaciones_p1_anot_2'=>request('anotaciones_p1_anot_2'),
      'anotaciones_p1_anot_3'=>request('anotaciones_p1_anot_3')

   ]);

    $proyecto->desarrollo->metadatos->increment('subetapa',1);

    return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa'=>$proyecto->desarrollo->metadatos->subetapa]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anotaciones  $anotaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Anotaciones $anotaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anotaciones  $anotaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Anotaciones $anotaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnotacionesRequest  $request
     * @param  \App\Models\Anotaciones  $anotaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Proyecto $proyecto, Request $request)
    {
        $proyecto->desarrollo->metadatos->anotaciones()->update([
        'anotaciones_p1_anot_1'=>request('anotaciones_p1_anot_1'),
        'anotaciones_p1_anot_2'=>request('anotaciones_p1_anot_2'),
        'anotaciones_p1_anot_3'=>request('anotaciones_p1_anot_3')

        ]);
         return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa'=>$proyecto->desarrollo->metadatos->subetapa]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anotaciones  $anotaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anotaciones $anotaciones)
    {
        //
    }
}
