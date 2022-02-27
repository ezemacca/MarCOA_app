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
use App\Models\desarrollo\metadatos\Metametadatos;use App\Models\Tecnica;

class TecnicaController extends Controller
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
     * @param  \App\Http\Requests\StoreTecnicaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Proyecto $proyecto, Request $request)
    {
        $proyecto->desarrollo->metadatos->tecnica()->
        create([
        'tecnica_p1'=>request('tecnica_p1'),
        'tecnica_p2'=>request('tecnica_p2'),
        'tecnica_p3'=>request('tecnica_p3'),
        'tecnica_p4_1'=>request('tecnica_p4_1'),
        'tecnica_p4_2'=>request('tecnica_p4_2'),
        'tecnica_p4_3'=>request('tecnica_p4_3'),
        'tecnica_p4_4'=>request('tecnica_p4_4'),
        'tecnica_p4_5'=>request('tecnica_p4_5'),
        'tecnica_p4_6'=>request('tecnica_p4_6')
            ]);

        $proyecto->desarrollo->metadatos->increment('subetapa',1);

        return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa'=>$proyecto->desarrollo->metadatos->subetapa]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tecnica  $tecnica
     * @return \Illuminate\Http\Response
     */
    public function show(Tecnica $tecnica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tecnica  $tecnica
     * @return \Illuminate\Http\Response
     */
    public function edit(Tecnica $tecnica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTecnicaRequest  $request
     * @param  \App\Models\Tecnica  $tecnica
     * @return \Illuminate\Http\Response
     */
    public function update(Proyecto $proyecto, Request $request)
    {
        $proyecto->desarrollo->metadatos->tecnica()->
        update([
        'tecnica_p1'=>request('tecnica_p1'),
        'tecnica_p2'=>request('tecnica_p2'),
        'tecnica_p3'=>request('tecnica_p3'),
        'tecnica_p4_1'=>request('tecnica_p4_1'),
        'tecnica_p4_2'=>request('tecnica_p4_2'),
        'tecnica_p4_3'=>request('tecnica_p4_3'),
        'tecnica_p4_4'=>request('tecnica_p4_4'),
        'tecnica_p4_5'=>request('tecnica_p4_5'),
        'tecnica_p4_6'=>request('tecnica_p4_6')
            ]);

        return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa'=>$proyecto->desarrollo->metadatos->subetapa]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tecnica  $tecnica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tecnica $tecnica)
    {
        //
    }
}
