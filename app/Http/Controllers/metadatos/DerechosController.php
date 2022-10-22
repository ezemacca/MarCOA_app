<?php

namespace App\Http\Controllers\metadatos;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use App\Models\Derechos;

class DerechosController extends Controller
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
     * @param  \App\Http\Requests\StoreDerechosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Proyecto $proyecto, Request $request)
    {
        $proyecto->desarrollo->metadatos->derechos()->create([
        'derechos_p1'=>request('derechos_p1'),
        'derechos_p2'=>request('derechos_p2'),
        'derechos_p3'=>request('derechos_p3')
    ]);
        
        $proyecto->desarrollo->metadatos->increment('subetapa',1);
        $decision= $proyecto->desarrollo->implementacion->decision;
        return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa_metadatos'=>$proyecto->desarrollo->metadatos->subetapa,'decision'=>$decision]);
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Derechos  $derechos
     * @return \Illuminate\Http\Response
     */
    public function show(Derechos $derechos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Derechos  $derechos
     * @return \Illuminate\Http\Response
     */
    public function edit(Derechos $derechos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDerechosRequest  $request
     * @param  \App\Models\Derechos  $derechos
     * @return \Illuminate\Http\Response
     */
    public function update(Proyecto $proyecto, Request $request)
    {
        $proyecto->desarrollo->metadatos->derechos()->update([
        'derechos_p1'=>request('derechos_p1'),
        'derechos_p2'=>request('derechos_p2'),
        'derechos_p3'=>request('derechos_p3')
    ]);    
        $decision= $proyecto->desarrollo->implementacion->decision;
        return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa_metadatos'=>$proyecto->desarrollo->metadatos->subetapa,'decision'=>$decision]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Derechos  $derechos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Derechos $derechos)
    {
        //
    }
}
