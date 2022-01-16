<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use App\Models\Instruccional;
use App\Models\Diseño;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Connection;
use DB;

class DiseñoController extends Controller
{
    public function index ($id)
	{
		$proyecto = Proyecto::findorFail($id);

		
		
		return view('content.etapas.diseño',['proyecto' => Proyecto::findorFail($id),'subetapa'=>1]);
	}

	public function store($id)
	{
		// switch($subetapa){


		// case 1:
		
		// break;

		// case 2:
		// //lo de estructura
		// break;
		// case 3:
		// //lo de diseño multimedia
		// break;

		// case 4: //significa que ya están completadas las 3 subetapas
	//};


		
	}

	public function store_instruccional($proyecto)
	{
		// $instruccional= new Instruccional([
		// 	//falta diseñoId
		// 	'instruccional_p1'=>request('instruccional_p1'),
		// 	'instruccional_p2'=>request('instruccional_p2'),
		// 	'instruccional_p3'=>request('instruccional_p3'),
		// 	'instruccional_p4'=>request('instruccional_p4'),
		// ]);
		
		
		// $this->$instruccional->save();
		// // $proyecto = Proyecto::findorFail($id);
		// // $subetapa=$subetapa+1;

		$diseño_id=Diseño::where('proyecto_id','=',$proyecto)->increment('subetapa',1);


		Diseño::create([
			//faltadiseñoId
			'proyecto_id'=>$proyecto,
			'subetapa'=>1
		]);
		
		Instruccional::create([
			//faltadiseñoId
			'diseño_id'=>$diseño_id,
			'instruccional_p1'=>request('instruccional_p1'),
			'instruccional_p2'=>request('instruccional_p2'),
			'instruccional_p3'=>request('instruccional_p3'),
			'instruccional_p4'=>request('instruccional_p4'),
		]);
		
		$proyecto = Proyecto::findorFail($id);
		$instruccional =Instruccional::where('proyecto_id', '=', $id)->first();

		Diseño::where('proyecto_id','=',$proyecto)->increment('subetapa',1);

		return view('content.etapas.diseño', ['proyecto'=>$proyecto, 'instruccional'=>$instruccional]);

	}
	public function store_estructura($id)
	{
		return(request());
	}
	public function store_multimedial($id)
	{
	}


	public function update_instruccional($id,$subetapa,Instruccional $instruccional){
		$instruccional->update([
			'instruccional_p1'=>request('instruccional_p1'),
			'instruccional_p2'=>request('instruccional_p2'),
			'instruccional_p3'=>request('instruccional_p3'),
			'instruccional_p4'=>request('instruccional_p4'),
		]);
		return redirect()-> view('content.etapas.diseño',['proyecto' => Proyecto::findorFail($id)],compact('subetapa'));
	}
}

