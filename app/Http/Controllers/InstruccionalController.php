<?php

namespace App\Http\Controllers;

use App\Models\Instruccional;
use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Models\Diseño;
use Barryvdh\DomPDF\Facade\Pdf;
use Anam\PhantomMagick\Converter;
use Fpdf\Fpdf;
use App;
use Response;

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
        if(is_null($proyecto->diseño->instruccional()->first()))
        {
            $proyecto->diseño->instruccional()->create([
                'instruccional_p1'=>request('instruccional_p1'),
                'instruccional_p2'=>request('instruccional_p2'),
                'instruccional_p3'=>request('instruccional_p3'),
                'instruccional_p4'=>request('instruccional_p4'),
            ]);
            $proyecto->diseño->increment('subetapa',1);

            if($_POST['guardar'] == 'guardar'){
                return view('content.etapas.diseño', ['proyecto'=>$proyecto, 'subetapa'=> $proyecto->diseño->subetapa, 'instruccional'=> $proyecto->diseño->instruccional()->first()]);
            }
            else
            {
                $instruccional=$proyecto->diseño->instruccional()->first();
                $pdf = PDF::loadView('content.etapas.includes.instruccional_pdf',['instruccional'=>$instruccional]);
                $pdf->setPaper('legal');
                $pdf->set_option( 'dpi' , '300' );
                return $pdf->download(); //stream() para que no descargue
            }
        }else{
            $proyecto->diseño->instruccional()->update([
            'instruccional_p1'=>request('instruccional_p1'),
            'instruccional_p2'=>request('instruccional_p2'),
            'instruccional_p3'=>request('instruccional_p3'),
            'instruccional_p4'=>request('instruccional_p4'),
            ]);
            return view('content.etapas.diseño', ['proyecto'=>$proyecto, 'subetapa'=> $proyecto->diseño->subetapa, 'instruccional'=> $proyecto->diseño->instruccional()->first()]);
        }
        

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
        $diseño= $proyecto->diseño;

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

        if($_POST['actualizar'] == 'actualizar'){

        return view('content.etapas.diseño',
            ['proyecto' => $proyecto,
            'subetapa'=>$subetapa,
            'instruccional'=>$instruccional,
            'subetapa'=> $subetapa,
            'estructura'=>$estructura, 
            'multimedial'=>$multimedial]);

        }else{
            $instruccional=$proyecto->diseño->instruccional()->first();
            $pdf = PDF::loadView('content.etapas.includes.instruccional_pdf',['instruccional'=>$instruccional]);
            
            $pdf->setPaper('legal');
            $pdf->set_option( 'dpi' , '300' );
            return $pdf->download(); //stream() para que no descargue
        }


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

    public function generar_pdf( $id)
    {
        $proyecto = Proyecto::findorFail($id);
        $instruccional=$proyecto->diseño->instruccional()->first();
        $pdf = PDF::loadView('content.etapas.includes.instruccional_pdf',['instruccional'=>$instruccional]);
        
        $pdf->setPaper('legal');
        $pdf->set_option( 'dpi' , '300' );
        return $pdf->download(); //stream() para que no descargue

    }
}
