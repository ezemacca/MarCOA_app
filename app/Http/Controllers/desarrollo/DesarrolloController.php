<?php

namespace App\Http\Controllers\desarrollo;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDesarrolloRequest;
use App\Http\Requests\UpdateDesarrolloRequest;
use App\Models\Desarrollo;

class DesarrolloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Proyecto $proyecto)
    {
        return view('content.etapas.desarrollo',$proyecto);
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
     * @param  \App\Http\Requests\StoreDesarrolloRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDesarrolloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Desarrollo  $desarrollo
     * @return \Illuminate\Http\Response
     */
    public function show(Desarrollo $desarrollo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Desarrollo  $desarrollo
     * @return \Illuminate\Http\Response
     */
    public function edit(Desarrollo $desarrollo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDesarrolloRequest  $request
     * @param  \App\Models\Desarrollo  $desarrollo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDesarrolloRequest $request, Desarrollo $desarrollo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Desarrollo  $desarrollo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desarrollo $desarrollo)
    {
        //
    }
}
