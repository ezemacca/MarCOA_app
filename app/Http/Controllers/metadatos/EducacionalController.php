<?php

namespace App\Http\Controllers\metadatos;


use Illuminate\Http\Request;
use App\Models\General;
use App\Models\desarrollo\Desarrollo;
use App\Models\Proyecto;

use App\Http\Controllers\Controller;
use App\Models\Educacional;

class EducacionalController extends Controller
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
     * @param  \App\Http\Requests\StoreEducacionalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Proyecto $proyecto, Request $request)
    {
        $proyecto->desarrollo->metadatos->educacional()->create([
        'educacional_p1'=>request('educacional_p1'),
        'educacional_p2'=>request('educacional_p2'),
        'educacional_p3'=>request('educacional_p3'),
        'educacional_p4'=>request('educacional_p4'),
        'educacional_p5'=>request('educacional_p5'),
        'educacional_p6'=>request('educacional_p6'),
        'educacional_p7'=>request('educacional_p7'),
        'educacional_p8'=>request('educacional_p8'),
        'educacional_p9'=>request('educacional_p9'),
        'educacional_p10'=>request('educacional_p10'),
        'educacional_p11'=>request('educacional_p11')
    ]);
        
        $proyecto->desarrollo->metadatos->increment('subetapa',1);
        
        return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa'=>$proyecto->desarrollo->metadatos->subetapa]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Educacional  $educacional
     * @return \Illuminate\Http\Response
     */
    public function show(Educacional $educacional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Educacional  $educacional
     * @return \Illuminate\Http\Response
     */
    public function edit(Educacional $educacional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEducacionalRequest  $request
     * @param  \App\Models\Educacional  $educacional
     * @return \Illuminate\Http\Response
     */
    public function update(Proyecto $proyecto, Request $request)
    {
        $proyecto->desarrollo->metadatos->educacional()->create([
        'educacional_p1'=>request('educacional_p1'),
        'educacional_p2'=>request('educacional_p2'),
        'educacional_p3'=>request('educacional_p3'),
        'educacional_p4'=>request('educacional_p4'),
        'educacional_p5'=>request('educacional_p5'),
        'educacional_p6'=>request('educacional_p6'),
        'educacional_p7'=>request('educacional_p7'),
        'educacional_p8'=>request('educacional_p8'),
        'educacional_p9'=>request('educacional_p9'),
        'educacional_p10'=>request('educacional_p10'),
        'educacional_p11'=>request('educacional_p11')
    ]);
        return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa'=>$proyecto->desarrollo->metadatos->subetapa]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Educacional  $educacional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Educacional $educacional)
    {
        //
    }
}
