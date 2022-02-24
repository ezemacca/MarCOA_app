<?php

namespace App\Http\Controllers\desarollo\metadatos;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClasificacionRequest;
use App\Http\Requests\UpdateClasificacionRequest;
use App\Models\Clasificacion;

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
    public function store(StoreClasificacionRequest $request)
    {
        //
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
    public function update(UpdateClasificacionRequest $request, Clasificacion $clasificacion)
    {
        //
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
