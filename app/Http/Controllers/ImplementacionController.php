<?php

namespace App\Http\Controllers;
use App\Models\Analisis;
use App\Models\Proyecto;
use App\Models\Diseño;
use Illuminate\Http\Request;
use DB;
use ZipArchive;
use Exception;
class ImplementacionController extends Controller
{

public function storerecurso(Proyecto $proyecto, Request $request)
	{
		$zip = new ZipArchive();

        $zipStatus = $zip->open($request->file('archivo'));
           
        if ($zipStatus !== true) {
    		throw new \Exception('Could not open ZIP file. Error code: ' );
		}

		$filesInside = [];

		for ($i = 0; $i < $zip->count(); $i++) {
   			 array_push($filesInside, $zip->getNameIndex($i));
		}


		return dd($filesInside);
		// return dd($request->file('archivo'));
	}
}