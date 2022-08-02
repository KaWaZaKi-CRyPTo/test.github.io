<?php

namespace App\Http\Livewire\EntryTicket;

use App\Models\EntryTicket;
use App\Models\Fourniseur;
use App\Models\Prodouit;
use Livewire\Component;

class Create extends Component
{
    public EntryTicket $entryTicket;

    public array $listsForFields = [];

    public function mount(EntryTicket $entryTicket)
    {
        $this->entryTicket        = $entryTicket;
        $this->entryTicket->qtt   = '1';
        $this->entryTicket->price = '1';
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.entry-ticket.create');
    }

    public function submit()
    {
        $this->validate();

        $this->entryTicket->save();

        return redirect()->route('admin.entry-tickets.index');
    }

    protected function rules(): array
    {
        return [
            'entryTicket.date' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'entryTicket.product_id' => [
                'integer',
                'exists:prodouits,id',
                'nullable',
            ],
            'entryTicket.qtt' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'entryTicket.price' => [
                'numeric',
                'nullable',
            ],
            'entryTicket.suplier_id' => [
                'integer',
                'exists:fourniseurs,id',
                'nullable',
            ],
            'entryTicket.n_bon_com' => [
                'string',
                'nullable',
            ],
            'entryTicket.n_rec_fac_bl' => [
                'string',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['product'] = Prodouit::pluck('name', 'id')->toArray();
        $this->listsForFields['suplier'] = Fourniseur::pluck('name', 'id')->toArray();
    }
}
