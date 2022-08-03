<?php

namespace App\Http\Livewire\BusPark;

use App\Models\BusPark;
use App\Models\City;
use App\Models\Country;
use Livewire\Component;

class Edit extends Component
{
    public BusPark $busPark;

    public array $listsForFields = [];

    public function mount(BusPark $busPark)
    {
        $this->busPark = $busPark;
        $this->initListsForFields();
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['country'] = Country::pluck('name', 'id')->toArray();
        $this->listsForFields['city']    = City::pluck('name', 'id')->take(10)->toArray();
    }

    public function updatedBusParkCountryId($value)
    {
        $this->listsForFields['city'] = City::where('country_id', $value)->pluck('name', 'id')->toArray();
        $this->busPark->city_id = null;
    }

    public function render()
    {
        return view('livewire.bus-park.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->busPark->save();

        return redirect()->route('admin.bus-parks.index');
    }

    protected function rules(): array
    {
        return [
            'busPark.name' => [
                'string',
                'nullable',
            ],
            'busPark.code' => [
                'string',
                'nullable',
            ],
            'busPark.country_id' => [
                'integer',
                'exists:countries,id',
                'nullable',
            ],
            'busPark.city_id' => [
                'integer',
                'exists:cities,id',
                'nullable',
            ],
        ];
    }
}
