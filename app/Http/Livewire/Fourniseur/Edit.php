<?php

namespace App\Http\Livewire\Fourniseur;

use App\Models\Fourniseur;
use Livewire\Component;

class Edit extends Component
{
    public Fourniseur $fourniseur;

    public function mount(Fourniseur $fourniseur)
    {
        $this->fourniseur = $fourniseur;
    }

    public function render()
    {
        return view('livewire.fourniseur.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->fourniseur->save();

        return redirect()->route('admin.fourniseurs.index');
    }

    protected function rules(): array
    {
        return [
            'fourniseur.name' => [
                'string',
                'required',
            ],
            'fourniseur.email' => [
                'string',
                'nullable',
            ],
            'fourniseur.phone' => [
                'string',
                'nullable',
            ],
        ];
    }
}
