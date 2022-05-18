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
       $archivos_html=null;
        if(is_null($proyecto->desarrollo))
        {
            $this->create($proyecto);
        }
        
        else{   

                if(is_null($proyecto->desarrollo->implementacion->decision)){
                    $decision=null;
                }

                else{
                    $decision=$proyecto->desarrollo->implementacion->decision;
                }

                if(is_null($proyecto->desarrollo->implementacion->scorm->first())){
                    $scorm=null;

                }
                else{
                    $archivos_html= $this->get_nodos($proyecto);
                    $scorm=$proyecto->desarrollo->implementacion->scorm->first();
                }


            return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa'=>$proyecto->desarrollo->subetapa,'decision'=>$decision, 'scorm'=>$scorm, 'archivos_html'=>$archivos_html]);
            //return dd($archivos_html);  
            
        };
    }

    //Este metodo recorre la carpeta donde está el SCORM y filtra los archivos HTML
   public function get_nodos(Proyecto $proyecto){
        
        $uuid=$proyecto->desarrollo->implementacion->scorm->first()->uuid;
        $ubicacion=$uuid;
        $carpeta= $this->getDisk()->allFiles($uuid);
        $htmls=array();
        foreach ($carpeta as $archivo){
            if( substr($archivo, strrpos($archivo, '.')+1)=='html'){
                array_push($htmls,$archivo);
            }
        }

        return $htmls;
   }

   private function getDisk()
    {
        if (!config()->has('filesystems.disks.' . config('scorm.disk'))) {
            throw new StorageNotFoundException('scorm_disk_not_define');
        }
        return Storage::disk(config('scorm.disk'));
    }

    public function importar(Proyecto $proyecto)
    {
        $proyecto->desarrollo->implementacion()->update(['decision'=>"importar"]);

        if(is_null($proyecto->desarrollo->implementacion->scorm->first()))
        {
            $scorm=null;
        }
        else
        {
            $scorm=$proyecto->desarrollo->implementacion->scorm->first();
        }

        return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa'=>$proyecto->desarrollo->subetapa,'decision'=>$proyecto->desarrollo->implementacion->decision, 'scorm'=>$scorm]);
    }

    public function nueva(Proyecto $proyecto)
    {
        $proyecto->desarrollo->implementacion()->update(['decision'=>"nueva"]);
        $nodos=$proyecto->desarrollo->nodos;

        return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa'=>$proyecto->desarrollo->subetapa,'nodos'=>$nodos,'decision'=>$proyecto->desarrollo->implementacion->decision]);
    }

    public function create(Proyecto $proyecto)
    {

        $subetapa=1;
        $proyecto->desarrollo()->create([
            'subetapa'=>$subetapa
        ])->implementacion()->create([
            'decision'=> 'null' 
        ]);

        // $proyecto->desarrollo->implementacion()->create([
        //     'decision'=> 'null' 
        // ]);
        return view('content.etapas.desarrollo',['proyecto'=>$proyecto,'subetapa'=>$subetapa]);
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
