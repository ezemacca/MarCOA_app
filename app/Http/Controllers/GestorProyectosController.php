<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class GestorProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //obtengo los datos de la clase proyecto (clase que se creó gracias al ORM de eloquent, que mapea la DB en una clase, donde cada tabla es  una clase, y cada fila es una instancia de la clase )
        $portafolio = Proyecto::latest()->get(); 

        return view('content.GestorProyectos',compact('portafolio')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($nombre)
    {
        // 

        // $proyecto = new Proyecto(['user_id'=>'usuario']);



        
        // return view('principal',compact('proyecto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  //
    {
       // $usuario=Auth::user()->id;
        
         Proyecto::create([
            'user_id'=> Auth::user()->id,
            'titulo'=> request('nom_proy'),
            'descripcion'=> request('desc_proy'),
            'etapa'=> '1',
        ]);

        return redirect()->route('GestorProyectos');


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
