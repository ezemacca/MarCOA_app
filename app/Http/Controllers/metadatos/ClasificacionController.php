<?php

namespace App\Http\Controllers\metadatos;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClasificacionRequest;
use App\Http\Requests\UpdateClasificacionRequest;
use App\Models\Clasificacion;
use App\Models\Proyecto;
use Illuminate\Http\Request;


class ClasificacionController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClasificacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Proyecto $proyecto, Request $request)
    {
        $proyecto->desarrollo->metadatos->clasificacion()->create([
           'clasificaciones_p1_cla_1'=>request('clasificaciones_p1_cla_1'),
            'clasificaciones_p1_cla_2'=>request('clasificaciones_p1_cla_2'),
            'clasificaciones_p1_cla_3'=>request('clasificaciones_p1_cla_3'),
            'clasificaciones_p1_cla_4'=>request('clasificaciones_p1_cla_4'),
        ]); 
        $proyecto->desarrollo->metadatos->increment('subetapa',1);
        $proyecto->increment('etapa',1);

        return redirect()->route('principal', $proyecto);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clasificacion  $clasificacion
     * @return \Illuminate\Http\Response
     */
    public function show(Clasificacion $clasificacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clasificacion  $clasificacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Clasificacion $clasificacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClasificacionRequest  $request
     * @param  \App\Models\Clasificacion  $clasificacion
     * @return \Illuminate\Http\Response
     */
    public function update(Proyecto $proyecto, Request $request)
    {
        $proyecto->desarrollo->metadatos->clasificacion()->update([
            'clasificaciones_p1_cla_1'=>request('clasificaciones_p1_cla_1'),
            'clasificaciones_p1_cla_2'=>request('clasificaciones_p1_cla_2'),
            'clasificaciones_p1_cla_3'=>request('clasificaciones_p1_cla_3'),
            'clasificaciones_p1_cla_4'=>request('clasificaciones_p1_cla_4'),
        ]);  
        $decision= $proyecto->desarrollo->implementacion->decision;
        return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa_metadatos'=>$proyecto->desarrollo->metadatos->subetapa,'decision'=>$decision]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clasificacion  $clasificacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clasificacion $clasificacion)
    {
        //
    }
}
