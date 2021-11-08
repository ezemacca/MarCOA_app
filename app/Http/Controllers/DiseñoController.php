<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiseñoController extends Controller
{
    public function index ()
	{
		return view('content.etapas.diseño');
	}
}
