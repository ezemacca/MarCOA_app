<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreacionController extends Controller
{
    public function index ()
	{
		return view('content.creacion');
	}
	
	public function crear ()
	{
		/*return view('content.creacion');*/
		
		$data = request()->validate([
			'nom_proy' => 'required'
		], [
			'nom_proy.required' => 'Es obligatorio ingresar un nombre para el nuevo proyecto.'
		]);
		
		/*$data = request()->all();*/
		return $data['nom_proy'];
	}
}