<?php

namespace App\Http\Livewire\Bus;

use App\Models\Bus;
use App\Models\BusPark;
use Livewire\Component;

class Edit extends Component
{
    public Bus $bus;

    public array $listsForFields = [];

    public function mount(Bus $bus)
    {
        $this->bus = $bus;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.bus.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->bus->save();

        return redirect()->route('admin.buses.index');
    }

    protected function rules(): array
    {
        return [
            'bus.bus_number' => [
                'string',
                'required',
            ],
            'bus.counetr' => [
                'string',
                'nullable',
            ],
            'bus.mark' => [
                'string',
                'nullable',
            ],
            'bus.park_id' => [
                'integer',
                'exists:bus_parks,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['park'] = BusPark::pluck('name', 'id')->toArray();
    }
}
