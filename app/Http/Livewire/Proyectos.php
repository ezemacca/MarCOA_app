<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Proyecto;

use Illuminate\Support\Facades\Auth;

class Proyectos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $user_id, $titulo, $descripcion, $etapa;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.proyectos.view', [
            'proyectos' => Proyecto::latest()
						->Where('user_id', 'LIKE', Auth::user()->id)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->user_id = null;
		$this->titulo = null;
		$this->descripcion = null;
		$this->etapa = null;
    }

    public function store()
    {
        $this->validate([
		// 'user_id' => 'required',
		'titulo' => 'required',
		'descripcion' => 'required',
		// 'etapa' => 'required',
        ]);

        $proyecto=Proyecto::create([ 
			'user_id' => Auth::user()->id,
			'titulo' => $this-> titulo,
			'descripcion' => $this-> descripcion,
			'etapa' => 1
        ]);
        
        $this->resetInput();
		// $this->emit('closeModal');
		// session()->flash('message', 'Proyecto Successfully created.');
		return redirect()->route('principal',$proyecto);
    }

    public function edit($id)
    {
        $record = Proyecto::findOrFail($id);

        $this->selected_id = $id; 
		$this->user_id = $record-> user_id;
		$this->titulo = $record-> titulo;
		$this->descripcion = $record-> descripcion;
		$this->etapa = $record-> etapa;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'user_id' => 'required',
		'titulo' => 'required',
		'descripcion' => 'required',
		'etapa' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Proyecto::find($this->selected_id);
            $record->update([ 
			'user_id' => $this-> user_id,
			'titulo' => $this-> titulo,
			'descripcion' => $this-> descripcion,
			'etapa' => $this-> etapa
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Proyecto Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Proyecto::where('id', $id);
            $record->delete();
        }
    }
}
