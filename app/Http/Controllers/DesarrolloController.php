<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\desarrollo\Desarrollo;
use App\Models\Proyecto;
use App\Models\Nodo;
use App\Models\Scorm;
use Peopleaps\Scorm\Model\ScormModel;
use App\Models\Diseño;

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
        $nodos=$proyecto->desarrollo->nodos;
        
        if(is_null($proyecto->desarrollo))
        {
            route('desarrollo.create',$proyecto);
        }

        else{   
            return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa'=>$proyecto->desarrollo->subetapa,'nodos'=>$nodos]);
        };
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Proyecto $proyecto)
    {
        $proyecto->desarrollo()->create([
            'subetapa'=>1
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
