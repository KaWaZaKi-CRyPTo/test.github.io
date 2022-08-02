<?php

namespace App\Http\Livewire\StockWarehouse;

use App\Http\Livewire\WithConfirmation;
use App\Http\Livewire\WithSorting;
use App\Models\StockWarehouse;
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
        $this->orderable         = (new StockWarehouse())->orderable;
    }

    public function render()
    {
        $query = StockWarehouse::with(['country', 'city'])->advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);

        $stockWarehouses = $query->paginate($this->perPage);

        return view('livewire.stock-warehouse.index', compact('query', 'stockWarehouses'));
    }

    public function deleteSelected()
    {
        abort_if(Gate::denies('stock_warehouse_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        StockWarehouse::whereIn('id', $this->selected)->delete();

        $this->resetSelected();
    }

    public function delete(StockWarehouse $stockWarehouse)
    {
        abort_if(Gate::denies('stock_warehouse_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stockWarehouse->delete();
    }
}
