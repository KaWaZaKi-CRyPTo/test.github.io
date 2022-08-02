<?php

namespace App\Http\Livewire\Provenance;

use App\Models\Country;
use App\Models\Provenance;
use Livewire\Component;

class Create extends Component
{
    public Provenance $provenance;

    public array $listsForFields = [];

    public function mount(Provenance $provenance)
    {
        $this->provenance = $provenance;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.provenance.create');
    }

    public function submit()
    {
        $this->validate();

        $this->provenance->save();

        return redirect()->route('admin.provenances.index');
    }

    protected function rules(): array
    {
        return [
            'provenance.name' => [
                'string',
                'nullable',
            ],
            'provenance.distance' => [
                'string',
                'nullable',
            ],
            'provenance.country_id' => [
                'integer',
                'exists:countries,id',
                'required',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['country'] = Country::pluck('name', 'id')->toArray();
    }
}
