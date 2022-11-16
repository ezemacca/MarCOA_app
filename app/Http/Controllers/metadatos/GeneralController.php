<?php

namespace App\Http\Controllers\metadatos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General;
use App\Models\desarrollo\Desarrollo;
use App\Models\desarrollo\metadatos\Metadatos;
use App\Models\Proyecto;
use App\Models\Diseño;

class GeneralController extends Controller
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
     * @param  \App\Http\Requests\StoreGeneralRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Proyecto $proyecto, Request $request)
    {
        // $proyecto->desarrollo->metadatos()->create([
        //     'subetapa'=>1]);
        
        $proyecto->desarrollo->metadatos->general()->create([
                'general_p1'=>request('general_p1'),
                'general_p2'=>request('general_p2'),
                'general_p3'=>request('general_p3'),
                'general_p4'=>request('general_p4'),
                'general_p5'=>request('general_p5'),
                'general_p7'=>request('general_p7'),
                'general_p8'=>request('general_p8'),
                'general_p9'=>request('general_p9'),
            ]);
        $proyecto->desarrollo->metadatos->general->palabrasclave()->create([
                'general_p6'=>request('general_p6-1')]);
        
        $proyecto->desarrollo->metadatos->increment('subetapa',1);


        $decision= $proyecto->desarrollo->implementacion->decision;

        return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa_metadatos'=>$proyecto->desarrollo->metadatos->subetapa,'decision'=>$decision]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function show(General $general)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function edit(General $general)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGeneralRequest  $request
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function update(Proyecto $proyecto,Request $request)
    {
        $proyecto->desarrollo->metadatos->general()->update([
                'general_p1'=>request('general_p1'),
                'general_p2'=>request('general_p2'),
                'general_p3'=>request('general_p3'),
                'general_p4'=>request('general_p4'),
                'general_p5'=>request('general_p5'),
                'general_p7'=>request('general_p7'),
                'general_p8'=>request('general_p8'),
                'general_p9'=>request('general_p9'),
            ]);
        //esto cambiará luego de hacer dinámica la creacion de palabras clave.
        $proyecto->desarrollo->metadatos->general->palabrasclave()->update([
                'general_p6'=>request('general_p6-1')]);
        $decision= $proyecto->desarrollo->implementacion->decision;
        if($proyecto->desarrollo->metadatos->subetapa>=10)
        {
            $proyecto->increment('etapa',1);
        }
        return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa_metadatos'=>$proyecto->desarrollo->metadatos->subetapa, 'decision'=>$decision]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function destroy(General $general)
    {
        //
    }
}
