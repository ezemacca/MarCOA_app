<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfiguracionController extends Controller
{
    public function index ()
	{
		return view('content.etapas.configuracion');
	}
}
