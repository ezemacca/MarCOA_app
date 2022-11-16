<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;

use Illuminate\Http\Request;

class PublicacionController extends Controller
{
    public function index (Proyecto $proyecto)
	{
		return view('content.etapas.publicacion',["proyecto"=>$proyecto]);
	}
}
