<?php

namespace App\Http\Livewire\City;

use App\Models\City;
use App\Models\Country;
use Livewire\Component;

class Create extends Component
{
    public City $city;

    public array $listsForFields = [];

    public function mount(City $city)
    {
        $this->city = $city;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.city.create');
    }

    public function submit()
    {
        $this->validate();

        $this->city->save();

        return redirect()->route('admin.cities.index');
    }

    protected function rules(): array
    {
        return [
            'city.country_id' => [
                'integer',
                'exists:countries,id',
                'required',
            ],
            'city.name' => [
                'string',
                'required',
            ],
            'city.slug' => [
                'string',
                'required',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['country'] = Country::pluck('name', 'id')->toArray();
    }
}
