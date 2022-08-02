<?php

namespace App\Http\Livewire\Prodouit;

use App\Models\Prodouit;
use Livewire\Component;

class Create extends Component
{
    public Prodouit $prodouit;

    public function mount(Prodouit $prodouit)
    {
        $this->prodouit        = $prodouit;
        $this->prodouit->price = '0.00';
    }

    public function render()
    {
        return view('livewire.prodouit.create');
    }

    public function submit()
    {
        $this->validate();

        $this->prodouit->save();

        return redirect()->route('admin.prodouits.index');
    }

    protected function rules(): array
    {
        return [
            'prodouit.name' => [
                'string',
                'required',
            ],
            'prodouit.mark' => [
                'string',
                'nullable',
            ],
            'prodouit.price' => [
                'numeric',
                'nullable',
            ],
        ];
    }
}
