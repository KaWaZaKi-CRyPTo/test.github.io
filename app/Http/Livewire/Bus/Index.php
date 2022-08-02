<?php

namespace App\Http\Livewire\Bus;

use App\Http\Livewire\WithConfirmation;
use App\Http\Livewire\WithSorting;
use App\Models\Bus;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    use WithSorting;
    use WithConfirmation;

    public int $perPage;

    public array $orderable;

    public string $search = '';

    public array $selected = [];

    public array $paginationOptions;

    protected $queryString = [
        'search' => [
            'except' => '',
        ],
        'sortBy' => [
            'except' => 'id',
        ],
        'sortDirection' => [
            'except' => 'asc',
        ],
    ];

    public function getSelectedCountProperty()
    {
        return count($this->selected);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function resetSelected()
    {
        $this->selected = [];
    }

    public function mount()
    {
        $this->sortBy            = 'id';
        $this->sortDirection     = 'asc';
        $this->perPage           = 25;
        $this->paginationOptions = config('project.pagination.options');
        $this->orderable         = (new Bus())->orderable;
    }

    public function render()
    {
        $query = Bus::with(['park'])->advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);

        $buses = $query->paginate($this->perPage);

        return view('livewire.bus.index', compact('buses', 'query'));
    }

    public function deleteSelected()
    {
        abort_if(Gate::denies('bus_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Bus::whereIn('id', $this->selected)->delete();

        $this->resetSelected();
    }

    public function delete(Bus $bus)
    {
        abort_if(Gate::denies('bus_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bus->delete();
    }
}
