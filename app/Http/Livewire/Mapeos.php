<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Mapeo;
use App\Models\Proyecto;
use Illuminate\Support\Facades\DB;
class Mapeos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
	public $proyecto;
    public $selected_id, $keyWord, $multimedial_id, $nodo, $descripcion, $plantilla;
    public $updateMode = false;

    public function mount( Proyecto $proyecto)
        {
        	$this->proyecto=$proyecto;

	      
        	$this->multimedial_id= $proyecto->diseño->multimedial->id;
        }

    public function render()
    {
    	

		$keyWord = '%'.$this->keyWord .'%';

        $this->multimedial_id=$this->proyecto->diseño->multimedial->id;

        return view(

        	'livewire.mapeos.view', [
            'mapeos' => 
      //       			Mapeo::latest()
						// ->Where('multimedial_id', 'LIKE', $multimedial_id)
						// ->orWhere('nodo', 'LIKE', $keyWord)
						// ->orWhere('descripcion', 'LIKE', $keyWord)
						// ->orWhere('plantilla', 'LIKE', $keyWord)
						// ->paginate(10),
         DB::table('mapeos')->where('multimedial_id','=', $this->multimedial_id )->paginate(3),

        ],['proyecto'=>$this->proyecto ] );
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->multimedial_id = null;
		$this->nodo = null;
		$this->descripcion = null;
		$this->plantilla = null;
    }

    public function store()
    {
        $this->validate([
		// 'multimedial_id' => 'required',
		'nodo' => 'required',
		'descripcion' => 'required',
		'plantilla' => 'required',
        ]);

        Mapeo::create([ 
			'multimedial_id' => $this->proyecto->diseño->multimedial->id,
			'nodo' => $this-> nodo,
			'descripcion' => $this-> descripcion,
			'plantilla' => $this-> plantilla
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Mapeo Successfully created.');
    }

    public function edit($id)
    {
        $record = Mapeo::findOrFail($id);

        $this->selected_id = $id; 
		// $this->multimedial_id = $record-> multimedial_id;
		$this->nodo = $record-> nodo;
		$this->descripcion = $record-> descripcion;
		$this->plantilla = $record-> plantilla;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'multimedial_id' => 'required',
		'nodo' => 'required',
		'descripcion' => 'required',
		'plantilla' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Mapeo::find($this->selected_id);
            $record->update([ 
			'multimedial_id' => $this-> multimedial_id,
			'nodo' => $this-> nodo,
			'descripcion' => $this-> descripcion,
			'plantilla' => $this-> plantilla
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Mapeo Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Mapeo::where('id', $id);
            $record->delete();
        }
    }
}
