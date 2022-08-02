<?php

namespace App\Http\Livewire\StockWarehouse;

use App\Models\City;
use App\Models\Country;
use App\Models\StockWarehouse;
use Livewire\Component;

class Create extends Component
{
    public array $listsForFields = [];

    public StockWarehouse $stockWarehouse;

    public function mount(StockWarehouse $stockWarehouse)
    {
        $this->stockWarehouse = $stockWarehouse;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.stock-warehouse.create');
    }

    public function submit()
    {
        $this->validate();

        $this->stockWarehouse->save();

        return redirect()->route('admin.stock-warehouses.index');
    }

    protected function rules(): array
    {
        return [
            'stockWarehouse.name' => [
                'string',
                'required',
            ],
            'stockWarehouse.country_id' => [
                'integer',
                'exists:countries,id',
                'required',
            ],
            'stockWarehouse.city_id' => [
                'integer',
                'exists:cities,id',
                'required',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['country'] = Country::pluck('name', 'id')->toArray();
        $this->listsForFields['city']    = City::pluck('name', 'id')->toArray();
    }
}
