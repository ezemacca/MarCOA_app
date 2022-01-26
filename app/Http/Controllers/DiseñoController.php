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

		$diseño= $proyecto->diseño()->first();
		
		$subetapa = $diseño->getAttribute('subetapa');
		
		$instruccional= $diseño->Instruccional()->first();

		$estructura= $diseño->estructura()->first();

		$multimedial=$diseño->multimedial()->first();

		return view('content.etapas.diseño',['proyecto' => Proyecto::findorFail($id),'subetapa'=> $subetapa, 'instruccional'=>$instruccional,'estructura'=>$estructura, 'multimedial'=>$multimedial]);
	}

	public function create()
    {
        // Diseño::create([
        //     'proyecto_id'=>$proyecto,
        //     'subetapa'=>1,
        // ]);
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

	public function store_instruccional()
	{

	}


}

