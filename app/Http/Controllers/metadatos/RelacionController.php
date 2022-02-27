<?php

namespace App\Http\Controllers\metadatos;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRelacionRequest;
use App\Http\Requests\UpdateRelacionRequest;
use App\Models\Relacion;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class RelacionController extends Controller
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
     * @param  \App\Http\Requests\StoreRelacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Proyecto $proyecto, Request $request)
    {
        $proyecto->desarrollo->metadatos
        ->relacion()->create([
        'relacion_p1_rel_1'=>request('relacion_p1_rel_1'),
        'relacion_p1_rel_2_1'=>request('relacion_p1_rel_2_1'),
        'relacion_p1_rel_2_2'=>request('relacion_p1_rel_2_2'),
        'relacion_p1_rel_2_3'=>request('relacion_p1_rel_2_3')
        ]);

        $proyecto->desarrollo->metadatos->increment('subetapa',1);

        return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa'=>$proyecto->desarrollo->metadatos->subetapa]);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Relacion  $relacion
     * @return \Illuminate\Http\Response
     */
    public function show(Relacion $relacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Relacion  $relacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Relacion $relacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRelacionRequest  $request
     * @param  \App\Models\Relacion  $relacion
     * @return \Illuminate\Http\Response
     */
    public function update(Proyecto $proyecto, Request $request)
    {
        $proyecto->desarrollo->metadatos
        ->relacion()->update([
        'relacion_p1_rel_1'=>request('relacion_p1_rel_1'),
        'relacion_p1_rel_2_1'=>request('relacion_p1_rel_2_1'),
        'relacion_p1_rel_2_2'=>request('relacion_p1_rel_2_2'),
        'relacion_p1_rel_2_3'=>request('relacion_p1_rel_2_3')
        ]);   
        return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa'=>$proyecto->desarrollo->metadatos->subetapa]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Relacion  $relacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Relacion $relacion)
    {
        //
    }
}
