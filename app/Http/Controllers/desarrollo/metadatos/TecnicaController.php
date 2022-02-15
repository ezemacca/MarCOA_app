<?php

namespace App\Http\Controllers\desarollo\metadatos;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTecnicaRequest;
use App\Http\Requests\UpdateTecnicaRequest;
use App\Models\Tecnica;

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
    public function store(StoreTecnicaRequest $request)
    {
        //
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
    public function update(UpdateTecnicaRequest $request, Tecnica $tecnica)
    {
        //
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
