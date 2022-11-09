<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use App\Models\Diseño;
use App\Models\Estructura;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Anam\PhantomMagick\Converter;
use Fpdf\Fpdf;
use App;
use Response;

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
    public function store(Proyecto $proyecto, Request $request)
    {
        $diseño= Diseño::where('proyecto_id', '=', $proyecto->id)
        ->first();

        if($request->hasFile('estructura_p2'))
        {
            $diseño->estructura()
            ->create([
                        'estructura_p1'=>request('estructura_p1'),
                        'estructura_p2'=>$request->file('estructura_p2')->store('estructura_p2')
            ]);

            $diseño->increment('subetapa',1);

            $multimedial=$diseño->multimedial()
            ->create([
                        'diseño_mult_p1'=>null

            ]); 

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
        $subetapa= $diseño->subetapa;
        $instruccional=$diseño->instruccional;
        $subetapa = $diseño->getAttribute('subetapa');
        $multimedial=$diseño->multimedial()->first();


        if($request->hasFile('estructura_p2'))
        {
            $request->file('estructura_p2')->store('estructura_p2');
        }

        return view('content.etapas.diseño', 
            ['proyecto'=>$proyecto,
            'subetapa'=>$diseño->subetapa,
            'instruccional'=>$diseño->instruccional()->first(),
            'estructura'=>$diseño->estructura()->first(),
            'subetapa'=> $subetapa,
            'multimedial'=>$multimedial
        ]);
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

    public function generar_pdf( $id)
    {
        $proyecto = Proyecto::findorFail($id);
        $estructura=$proyecto->diseño->estructura()->first();
        $pdf = PDF::loadView('content.etapas.includes.estructura_pdf',['estructura'=>$estructura]);
        $pdf->setPaper('legal');
        $pdf->set_option( 'dpi' , '300' );
        return $pdf->download();
    }
}
