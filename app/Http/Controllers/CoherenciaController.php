<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Coherencia;
use Illuminate\Http\Request;
use Illuminate\Database\Connection;
use DB;
class CoherenciaController extends Controller
{
    public function index (Proyecto $proyecto)
	{
		return view('content.etapas.coherencia',['proyecto'=>$proyecto->first()]);
	}

	public function store(Proyecto $proyecto, Request $request)
    {
    	$coherencia= $request->get('coherencia');
    	$proyecto->coherencia()->create([
    		'coherencia_p1'=> in_array('coherencia_p1',$coherencia),
    		'coherencia_p2'=> in_array('coherencia_p2',$coherencia),
    		'coherencia_p3'=> in_array('coherencia_p3',$coherencia),
    		'coherencia_p4'=> in_array('coherencia_p4',$coherencia),
    		'coherencia_p5'=> in_array('coherencia_p5',$coherencia),
    		'coherencia_p6'=> in_array('coherencia_p6',$coherencia),
    		'coherencia_p7'=> in_array('coherencia_p7',$coherencia),
    		'coherencia_p8'=> in_array('coherencia_p8',$coherencia)

    	]);
    	
    	return redirect(route('principal',$proyecto));

    }
    public function edit( Proyecto $proyecto)
	{
		$coherencia=$proyecto->coherencia;

		// $coherencia = Coherencia::where('proyecto_id', '=', $proyecto)->first();
		return view('content.etapas.coherencia_edit',['proyecto'=>$proyecto->first()]);
		// return $proyecto->first()->coherencia->coherencia_p1	 ;
	}

	public function update( Proyecto $proyecto,Request $request){

		$coherencia= $request->get('coherencia');
		$proyecto->coherencia()->update([
			'coherencia_p1'=> in_array('coherencia_p1',$coherencia),
    		'coherencia_p2'=> in_array('coherencia_p2',$coherencia),
    		'coherencia_p3'=> in_array('coherencia_p3',$coherencia),
    		'coherencia_p4'=> in_array('coherencia_p4',$coherencia),
    		'coherencia_p5'=> in_array('coherencia_p5',$coherencia),
    		'coherencia_p6'=> in_array('coherencia_p6',$coherencia),
    		'coherencia_p7'=> in_array('coherencia_p7',$coherencia),
    		'coherencia_p8'=> in_array('coherencia_p8',$coherencia)
		]);

		return redirect()->route('principal', $proyecto);
	}
}

// array_key_exists('coherencia_p1',$request->coherencia)),