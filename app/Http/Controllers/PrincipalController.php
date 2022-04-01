<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrincipalController extends Controller
{
    // public function index ($id)
    public function index($id)

	{
		// $usuario= Auth::id(); 
		// $proyecto= Proyecto::where('user_id', '=', 'usuario' )->first(); 
		return view('content.principal',['proyecto' => Proyecto::findorFail($id)] ) ;
		//return $id;
	}
	
}
