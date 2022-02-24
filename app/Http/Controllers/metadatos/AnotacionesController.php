<?php

namespace App\Http\Controllers\desarollo\metadatos;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAnotacionesRequest;
use App\Http\Requests\UpdateAnotacionesRequest;
use App\Models\Anotaciones;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnotacionesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnotacionesRequest $request)
    {
        //
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
    public function update(UpdateAnotacionesRequest $request, Anotaciones $anotaciones)
    {
        //
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
