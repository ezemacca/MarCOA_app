<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicacionController extends Controller
{
    public function index ()
	{
		return view('content.etapas.publicacion');
	}
}
