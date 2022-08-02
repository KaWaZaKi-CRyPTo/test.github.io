<?php

namespace App\Http\Livewire\Fourniseur;

use App\Http\Livewire\WithConfirmation;
use App\Http\Livewire\WithSorting;
use App\Models\Fourniseur;
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
        $this->perPage           = 100;
        $this->paginationOptions = config('project.pagination.options');
        $this->orderable         = (new Fourniseur())->orderable;
    }

    public function render()
    {
        $query = Fourniseur::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);

        $fourniseurs = $query->paginate($this->perPage);

        return view('livewire.fourniseur.index', compact('fourniseurs', 'query'));
    }

    public function deleteSelected()
    {
        abort_if(Gate::denies('fourniseur_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Fourniseur::whereIn('id', $this->selected)->delete();

        $this->resetSelected();
    }

    public function delete(Fourniseur $fourniseur)
    {
        abort_if(Gate::denies('fourniseur_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fourniseur->delete();
    }
}
