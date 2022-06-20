<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mapeo;
use App\Http\Livewire\Field;
use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Models\Diseño;
use App\Models\Estructura;
use Illuminate\Support\Facades\DB;
use \stdClass;  

class MapeosDinamicos extends Component
{
    public $mapeos;
    public $diseño_mult_p1;
    public $proyecto;
    public $nodo, $descripcion, $plantilla;
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;
    public $haymapeos ;

    public function mount( Proyecto $proyecto)
        {

            if (  $proyecto->diseño->multimedial )
            {

                $this->diseño_mult_p1= $proyecto->first()->diseño->multimedial->diseño_mult_p1;
                $this->mapeos = $proyecto->first()->diseño->multimedial->mapeos;
            }
            
            
            $this->proyecto= $proyecto;
           
        }

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }
 
    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function eliminar_mapeo($mapeo)
    {
        // Mapeo::delete('id','=',$mapeo);
        // unset($this->inputs[$i]);
        DB::table('mapeos')->where('id', '=', $mapeo)->delete();
    }
 
    public function render(Proyecto $proyecto)
    {
            // $this->mapeos = $proyecto->first()->diseño->multimedial->mapeos;
        
        return view('livewire.mapeos-dinamicos', ['proyecto'=>$this->proyecto]);
    }
 
    private function resetInputFields(){
        $this->nodo = '';
        $this->descripcion = '';
        $this->plantilla = '';
    }
 

    public function store()
    {
        
        if (  is_null($this->proyecto->diseño->multimedial))
        {
           $this->proyecto->diseño->multimedial()
            ->create([
                            'diseño_mult_p1'=>$this->diseño_mult_p1
            ]); 

        }else{
            
            $this->proyecto->diseño->multimedial()
            ->update([
                        'diseño_mult_p1'=>$this->diseño_mult_p1
            ]);
        }

        $validatedDate = $this->validate([
                'nodo.0' => 'required',
                'descripcion.0' => 'required',
                'plantilla.0' => 'required',
                'nodo.*' => 'required',
                'descripcion.*' => 'required',
                'plantilla.*' => 'required',
            ],
            [
                'nodo.0.required' => 'Ingrese el nodo',
                'descripcion.0.required' => 'Ingrese la descripcion',
                'plantilla.0.required' => 'Ingrese la Plantilla',

                'nodo.*.required' => 'Ingrese el nodo',
                'descripcion.*.required' => 'Ingrese la descripcion',
                'plantilla.*.required' => 'Ingrese la plantilla',
            ]
        );
        

        foreach ($this->nodo as $key => $value) {
            $this->proyecto->first()->diseño->multimedial->mapeos()
            ->create([
                'multimedial_id' => $this->proyecto->first()->diseño->multimedial->id,
                'nodo' => $this->nodo[$key],
                'descripcion' => $this->descripcion[$key],
                'plantilla' => $this->plantilla[$key]
               ]);
        }


 
        /*$this->inputs = [];
 
        $this->resetInputFields();
 
        session()->flash('message', 'Mapeo/s creado/s exitosamente.');*/

        if(is_null($this->proyecto->desarrollo)){

            $this->proyecto->first()->desarrollo()->create([
                'subetapa'=>1
            ]);

            $this->proyecto->first()->desarrollo->metadatos()->create([
                'subetapa'=>1
            ]);
            $this->proyecto->first()->desarrollo->implementacion()->create([
            'decision'=> 'null'
        ]);
            
        }
        $this->proyecto->increment('etapa',1);
        return (redirect()->route('principal', $this->proyecto));
    }

    // public function update(){
    //     $validatedDate = $this->validate([
    //             'nodo.0' => 'required',
    //             'descripcion.0' => 'required',
    //             'plantilla.0' => 'required',
    //             'nodo.*' => 'required',
    //             'descripcion.*' => 'required',
    //             'plantilla.*' => 'required',
    //         ],
    //         [
    //             'nodo.0.required' => 'Ingrese el nodo',
    //             'descripcion.0.required' => 'Ingrese la descripcion',
    //             'plantilla.0.required' => 'Ingrese la plantilla',

    //             'nodo.*.required' => 'Ingrese el nodo',
    //             'descripcion.*.required' => 'Ingrese la descripcion',
    //             'plantilla.*.required' => 'Ingrese la plantilla',
    //         ]
    //     );
 
    //     foreach ($this->nodo as $key => $value) {
    //         Mapeo::update([ 'nodo' => $this->nodo[$key], 'descripcion' => $this->descripcion[$key], 'plantilla' => $this->plantilla[$key]]);
    //     }
 
    //     $this->inputs = [];
 
    //     $this->resetInputFields();
 
    //     session()->flash('message', 'Mapeo creado exitosamente.');

    // }
}
