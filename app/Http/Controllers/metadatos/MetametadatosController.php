<?php

namespace App\Http\Controllers\metadatos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ciclo;
use App\Models\General;
use App\Models\desarrollo\Desarrollo;
use App\Models\desarrollo\metadatos\Metadatos;
use App\Models\Proyecto;
use App\Models\Diseño;
use App\Models\desarrollo\metadatos\Metametadatos;

class MetametadatosController extends Controller
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
     * @param  \App\Http\Requests\StoreMetametadatosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Proyecto $proyecto, Request $request)
    {
        $proyecto->desarrollo->metadatos->Metametadatos()->create([
        'metametadatos_p1'=>request('metametadatos_p1'),
        'metametadatos_p2'=>request('metametadatos_p2'),
        'metametadatos_p3'=>request('metametadatos_p3'),
        'metametadatos_p4'=>request('metametadatos_p4')
            ]);
        $proyecto->desarrollo->metadatos->increment('subetapa',1);
        $decision= $proyecto->desarrollo->implementacion->decision;
        if($proyecto->desarrollo->metadatos->subetapa>=10)
        {
            $proyecto->increment('etapa',1);
        }
        return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa_metadatos'=>$proyecto->desarrollo->metadatos->subetapa,'decision'=>$decision]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Metametadatos  $metametadatos
     * @return \Illuminate\Http\Response
     */
    public function show(Metametadatos $metametadatos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Metametadatos  $metametadatos
     * @return \Illuminate\Http\Response
     */
    public function edit(Metametadatos $metametadatos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMetametadatosRequest  $request
     * @param  \App\Models\Metametadatos  $metametadatos
     * @return \Illuminate\Http\Response
     */
    public function update(Proyecto $proyecto, Request $request)
    {
     $proyecto->desarrollo->metadatos->Metametadatos()->update([
        'metametadatos_p1'=>request('metametadatos_p1'),
        'metametadatos_p2'=>request('metametadatos_p2'),
        'metametadatos_p3'=>request('metametadatos_p3'),
        'metametadatos_p4'=>request('metametadatos_p4')
            ]);   
     $decision= $proyecto->desarrollo->implementacion->decision;
     return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa_metadatos'=>$proyecto->desarrollo->metadatos->subetapa,'decision'=>$decision]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Metametadatos  $metametadatos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Metametadatos $metametadatos)
    {
        //
    }
}
