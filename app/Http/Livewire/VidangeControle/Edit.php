<?php

namespace App\Http\Livewire\VidangeControle;

use App\Models\Bus;
use App\Models\Oil;
use App\Models\VidangeControle;
use Livewire\Component;

class Edit extends Component
{
    public array $listsForFields = [];

    public VidangeControle $vidangeControle;

    public function mount(VidangeControle $vidangeControle)
    {
        $this->vidangeControle = $vidangeControle;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.vidange-controle.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->vidangeControle->save();

        return redirect()->route('admin.vidange-controles.index');
    }

    protected function rules(): array
    {
        return [
            'vidangeControle.bus_id' => [
                'integer',
                'exists:buses,id',
                'required',
            ],
            'vidangeControle.oil_id' => [
                'integer',
                'exists:oils,id',
                'required',
            ],
            'vidangeControle.anicien_number' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'vidangeControle.new_number' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'vidangeControle.last_date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'vidangeControle.date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'vidangeControle.oil_qtt' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['bus'] = Bus::pluck('bus_number', 'id')->toArray();
        $this->listsForFields['oil'] = Oil::pluck('mark_oil', 'id')->toArray();
    }
}
