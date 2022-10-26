<?php

namespace App\Http\Controllers;

use App\Models\Multimedial;
use Illuminate\Http\Request;
use App\Http\Controllers\DiseñoController;
use App\Models\Proyecto;
use App\Models\Diseño;
use App\Models\Estructura;
use App\Models\Mapeo;
class MultimedialController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Proyecto $proyecto, Request $request)
    {
        $diseño= $proyecto->diseño()->where('proyecto_id', '=', $proyecto->id)->first();

        $multimedial=$diseño->multimedial()
            ->update([
                        'diseño_mult_p1'=>request('diseño_mult_p1')

            ]); 
        
        $diseño->increment('subetapa',1);
        $proyecto->increment('etapa',1);
        $proyecto->desarrollo()->create([
            'subetapa'=>1
        ]);
        $proyecto->desarrollo->implementacion()->create(['decision'=>null]);
       $proyecto->desarrollo->metadatos()->create([
            'subetapa'=>1
        ]);
       // $proyecto->coherencia()->create([
       //  'coherencia_p1'=>false,
       //  'coherencia_p2'=>false,
       //  'coherencia_p3'=>false,
       //  'coherencia_p4'=>false,
       //  'coherencia_p5'=>false,
       //  'coherencia_p6'=>false,
       //  ]);

       return (redirect()->route('principal', $proyecto));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Multimedial  $multimedial
     * @return \Illuminate\Http\Response
     */
    public function show(Multimedial $multimedial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Multimedial  $multimedial
     * @return \Illuminate\Http\Response
     */
    public function edit(Multimedial $multimedial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Multimedial  $multimedial
     * @return \Illuminate\Http\Response
     */
    public function update( $proyecto, Request $request)
    {

        $diseño= Diseño::where('proyecto_id', '=', $proyecto)->first();

        $diseño->multimedial->update([
            'diseño_mult_p1'=>request('diseño_mult_p1')
        ]);
         return view('content.etapas.diseño', ['proyecto'=>$proyecto, 'subetapa'=>$diseño->subetapa, 'instruccional'=>$diseño->instruccional()->first(),'estructura'=>$diseño->estructura()->first(), 'multimedial'=>$diseño->multimedial]); 

         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Multimedial  $multimedial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Multimedial $multimedial)
    {
        //
    }
}
