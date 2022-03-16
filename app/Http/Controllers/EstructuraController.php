<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use App\Models\Diseño;
use App\Models\Estructura;
use Illuminate\Http\Request;

class EstructuraController extends Controller
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
    public function store($proyecto, Request $request)
    {
        $diseño= Diseño::where('proyecto_id', '=', $proyecto)
        ->first();

        if($request->hasFile('estructura_p2'))
        {
            $diseño->estructura()
            ->create([
                        'estructura_p1'=>request('estructura_p1'),
                        'estructura_p2'=>$request->file('estructura_p2')->store('estructura_p2')
            ]);

            $diseño->increment('subetapa',1);

            return view('content.etapas.diseño', ['proyecto'=>$proyecto, 'subetapa'=>$diseño->subetapa, 'instruccional'=>$diseño->instruccional()->first(), 'estructura'=>$diseño->estructura()->first()]);
        }else{ 

             return view('content.etapas.diseño', ['proyecto'=>$proyecto, 'subetapa'=>$diseño->subetapa, 'instruccional'=>$diseño->instruccional()->first(), 'estructura'=>$diseño->estructura()->first()]);
        }

        


        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estructura  $estructura
     * @return \Illuminate\Http\Response
     */
    public function show(Estructura $estructura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estructura  $estructura
     * @return \Illuminate\Http\Response
     */
    public function edit(Estructura $estructura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estructura  $estructura
     * @return \Illuminate\Http\Response
     */
    public function update($proyecto, Request $request, Estructura $estructura)
    {
       

        $diseño= Diseño::where('proyecto_id', '=', $proyecto)->first();

        $estructura->update([
            'estructura_p1'=>request('estructura_p1'),
        ]);

        if($request->hasFile('estructura_p2'))
        {
            $request->file('estructura_p2')->store('estructura_p2');
        }

        return view('content.etapas.diseño', ['proyecto'=>$proyecto, 'subetapa'=>$diseño->subetapa, 'instruccional'=>$diseño->instruccional()->first(), 'estructura'=>$diseño->estructura()->first()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estructura  $estructura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estructura $estructura)
    {
        //
    }
}
