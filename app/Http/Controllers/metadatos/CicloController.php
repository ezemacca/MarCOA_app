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


class CicloController extends Controller
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
     * @param  \App\Http\Requests\StoreCicloRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Proyecto $proyecto, Request $request)
    {
        $proyecto->desarrollo->metadatos->ciclo()->create([
                'ciclo_p1'=>request('ciclo_p1'),
                'ciclo_p2'=>request('ciclo_p2'),
            ]);
        $proyecto->desarrollo->metadatos->ciclo->contribuyente()->create([
            'ciclo_p3_cont-1'=>request('ciclo_p3_cont-1'),'
            ciclo_p3_cont-2'=>request('ciclo_p3_cont-2'),
            'ciclo_p3_cont-3'=>request('ciclo_p3_cont-3'),
        ]);
        $proyecto->desarrollo->metadatos->increment('subetapa',1);
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ciclo  $ciclo
     * @return \Illuminate\Http\Response
     */
    public function show(Ciclo $ciclo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ciclo  $ciclo
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciclo $ciclo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCicloRequest  $request
     * @param  \App\Models\Ciclo  $ciclo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCicloRequest $request, Ciclo $ciclo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ciclo  $ciclo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciclo $ciclo)
    {
        //
    }
}
