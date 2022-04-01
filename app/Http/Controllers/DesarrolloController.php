<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\desarrollo\Desarrollo;
use App\Models\Proyecto;
use App\Models\Nodo;
use App\Models\Scorm;
use Peopleaps\Scorm\Model\ScormModel;
use App\Models\Diseño;
use Illuminate\Support\Facades\Storage;
use App\Models\Implementacion;

class DesarrolloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Proyecto $proyecto)
    {
        // $posts = Post::has('comments')->get();

        // $nodos= Nodo::has('scorm')->all();


        // foreach ($nodo as &$n)
        // {
        //     $files = Storage::allFiles($directory);
        // }
        
        if(is_null($proyecto->desarrollo))
        {
            route('desarrollo.create',$proyecto);
        }

        else{   
                $nodos=$proyecto->desarrollo->nodos;
                $decision=$proyecto->desarrollo->implementacion->decision;

            return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa'=>$proyecto->desarrollo->subetapa,'nodos'=>$nodos,'decision'=>$decision]);
                // return dd($decision);
        };
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function importar(Proyecto $proyecto)
    {
        $proyecto->desarrollo->implementacion()->update(['decision'=>"importar"]);
        $nodos=$proyecto->desarrollo->nodos;
        return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa'=>$proyecto->desarrollo->subetapa,'nodos'=>$nodos,'decision'=>$proyecto->desarrollo->implementacion->decision]);
    }

    public function nueva(Proyecto $proyecto)
    {
        $proyecto->desarrollo->implementacion()->update(['decision'=>"nueva"]);
        $nodos=$proyecto->desarrollo->nodos;
        return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa'=>$proyecto->desarrollo->subetapa,'nodos'=>$nodos,'decision'=>$proyecto->desarrollo->implementacion->decision]);
    }

    public function create(Proyecto $proyecto)
    {
        $proyecto->desarrollo()->create([
            'subetapa'=>1
        ]);
        $proyecto->desarrollo->implementacion()->create([
            'decision'=> 'null'
        ]);
        return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa'=>$proyecto->desarrollo->subetapa]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
