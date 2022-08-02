<?php

namespace App\Http\Livewire\Route;

use App\Models\Provenance;
use App\Models\Route;
use Livewire\Component;

class Create extends Component
{
    public Route $route;

    public array $listsForFields = [];

    public function mount(Route $route)
    {
        $this->route = $route;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.route.create');
    }

    public function submit()
    {
        $this->validate();

        $this->route->save();

        return redirect()->route('admin.routes.index');
    }

    protected function rules(): array
    {
        return [
            'route.name' => [
                'string',
                'required',
            ],
            'route.start_provenance_id' => [
                'integer',
                'exists:provenances,id',
                'nullable',
            ],
            'route.end_provenance_id' => [
                'integer',
                'exists:provenances,id',
                'nullable',
            ],
            'route.distance' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['start_provenance'] = Provenance::pluck('name', 'id')->toArray();
        $this->listsForFields['end_provenance']   = Provenance::pluck('name', 'id')->toArray();
    }
}
