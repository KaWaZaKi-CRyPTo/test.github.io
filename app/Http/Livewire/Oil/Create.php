<?php

namespace App\Http\Livewire\Oil;

use App\Models\Oil;
use Livewire\Component;

class Create extends Component
{
    public Oil $oil;

    public function mount(Oil $oil)
    {
        $this->oil               = $oil;
        $this->oil->oil_distance = '8000';
    }

    public function render()
    {
        return view('livewire.oil.create');
    }

    public function submit()
    {
        $this->validate();

        $this->oil->save();

        return redirect()->route('admin.oils.index');
    }

    protected function rules(): array
    {
        return [
            'oil.mark_oil' => [
                'string',
                'required',
            ],
            'oil.oil_distance' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
        ];
    }
}
