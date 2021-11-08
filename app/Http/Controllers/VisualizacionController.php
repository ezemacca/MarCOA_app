<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisualizacionController extends Controller
{
    public function index ()
	{
		return view('content.etapas.visualizacion');
	}
}
