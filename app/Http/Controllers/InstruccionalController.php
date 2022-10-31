<?php

namespace App\Http\Controllers;

use App\Models\Instruccional;
use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Models\Diseño;

class InstruccionalController extends Controller
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
        
        // $instruccional= new Instruccional([
        //  //falta diseñoId
        //  'instruccional_p1'=>request('instruccional_p1'),
        //  'instruccional_p2'=>request('instruccional_p2'),
        //  'instruccional_p3'=>request('instruccional_p3'),
        //  'instruccional_p4'=>request('instruccional_p4'),
        // ]);
        
        
        // $this->$instruccional->save();
        // // $proyecto = Proyecto::findorFail($id);
        // // $subetapa=$subetapa+1;

        // $diseño_id=Diseño::where('proyecto_id','=',$proyecto)->increment('subetapa',1);


        // Diseño::where('proyecto_id', '=', $proyecto)->first();
        $diseño= $proyecto->diseño;
        $diseño->instruccional()->create([
            'instruccional_p1'=>request('instruccional_p1'),
            'instruccional_p2'=>request('instruccional_p2'),
            'instruccional_p3'=>request('instruccional_p3'),
            'instruccional_p4'=>request('instruccional_p4'),
        ]);
        

         $diseño->increment('subetapa',1);

        return view('content.etapas.diseño', ['proyecto'=>$proyecto, 'subetapa'=>$diseño->subetapa, 'instruccional'=>$diseño->instruccional()->first()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instruccional  $instruccional
     * @return \Illuminate\Http\Response
     */
    public function show(Instruccional $instruccional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instruccional  $instruccional
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instruccional  $instruccional
     * @return \Illuminate\Http\Response
     */
    public function update(Proyecto $proyecto,Request $request)
    {
        // $proyecto = Proyecto::findorFail($id)->first();
        $diseño= $proyecto->diseño;
        // Diseño::where('proyecto_id', '=', $id)->first();

        $subetapa= $diseño->subetapa;

        $instruccional=$diseño->instruccional;

        $subetapa = $diseño->getAttribute('subetapa');

        $estructura= $diseño->estructura()->first();

        $multimedial=$diseño->multimedial()->first();

        $instruccional->update([
            'instruccional_p1'=>request('instruccional_p1'),
            'instruccional_p2'=>request('instruccional_p2'),
            'instruccional_p3'=>request('instruccional_p3'),
            'instruccional_p4'=>request('instruccional_p4'),
        ]);
        return view('content.etapas.diseño',
            ['proyecto' => $proyecto,
            'subetapa'=>$subetapa,
            'instruccional'=>$instruccional,
            'subetapa'=> $subetapa,
            'estructura'=>$estructura, 
            'multimedial'=>$multimedial]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instruccional  $instruccional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instruccional $instruccional)
    {
        //
    }
}
