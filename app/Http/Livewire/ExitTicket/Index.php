<?php

namespace App\Http\Livewire\ExitTicket;

use App\Http\Livewire\WithConfirmation;
use App\Http\Livewire\WithSorting;
use App\Models\ExitTicket;
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
            'except' => 'desc',
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
        $this->sortDirection     = 'desc';
        $this->perPage           = 10;
        $this->paginationOptions = config('project.pagination.options');
        $this->orderable         = (new ExitTicket())->orderable;
    }

    public function render()
    {
        $query = ExitTicket::with(['product', 'busNumber'])->advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);

        $exitTickets = $query->paginate($this->perPage);

        return view('livewire.exit-ticket.index', compact('exitTickets', 'query'));
    }

    public function deleteSelected()
    {
        abort_if(Gate::denies('exit_ticket_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        ExitTicket::whereIn('id', $this->selected)->delete();

        $this->resetSelected();
    }

    public function delete(ExitTicket $exitTicket)
    {
        abort_if(Gate::denies('exit_ticket_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exitTicket->delete();
    }
}
