<?php

namespace App\Http\Livewire\UserAlert;

use App\Http\Livewire\WithConfirmation;
use App\Http\Livewire\WithSorting;
use App\Models\UserAlert;
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
        $this->orderable         = (new UserAlert())->orderable;
    }

    public function render()
    {
        $query = UserAlert::with(['users'])->advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);

        $userAlerts = $query->paginate($this->perPage);

        return view('livewire.user-alert.index', compact('query', 'userAlerts'));
    }

    public function deleteSelected()
    {
        abort_if(Gate::denies('user_alert_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        UserAlert::whereIn('id', $this->selected)->delete();

        $this->resetSelected();
    }

    public function delete(UserAlert $userAlert)
    {
        abort_if(Gate::denies('user_alert_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $userAlert->delete();
    }
}