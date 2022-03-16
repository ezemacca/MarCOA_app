<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Collection;

class InputsDinamicos extends Component
{

    public Collection $inputs;

    public function render()
    {
        return view('livewire.inputs-dinamicos' );
    }

    public function addInput()
    {
        $this->inputs->push(['email' => '']);
    }

    public function removeInput($key)
    {
        $this->inputs->pull($key);
    }

    public function mount()
{
    $this->fill([
        'inputs' => collect([['email' => '']]),
    ]);
}

protected $rules = [
    'inputs.*.email' => 'required',
];

protected $messages = [
    'inputs.*.email.required' => 'This email field is required.',
];

public function submit()
{
    $this->validate();
}

}
