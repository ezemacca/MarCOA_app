<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoherenciaController extends Controller
{
    public function index ()
	{
		return view('content.etapas.coherencia');
	}
}
