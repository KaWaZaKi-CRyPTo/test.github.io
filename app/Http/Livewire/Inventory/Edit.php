<?php

namespace App\Http\Livewire\Inventory;

use App\Models\Inventory;
use App\Models\Prodouit;
use Livewire\Component;

class Edit extends Component
{
    public Inventory $inventory;

    public array $listsForFields = [];

    public function mount(Inventory $inventory)
    {
        $this->inventory = $inventory;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.inventory.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->inventory->save();

        return redirect()->route('admin.inventories.index');
    }

    protected function rules(): array
    {
        return [
            'inventory.product_id' => [
                'integer',
                'exists:prodouits,id',
                'nullable',
            ],
            'inventory.qtt_init' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'inventory.final_qtt' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['product'] = Prodouit::pluck('name', 'id')->toArray();
    }
}
