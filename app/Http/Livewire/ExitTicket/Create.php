<?php

namespace App\Http\Livewire\ExitTicket;

use App\Models\Bus;
use App\Models\ExitTicket;
use App\Models\Prodouit;
use Livewire\Component;

class Create extends Component
{
    public ExitTicket $exitTicket;

    public array $listsForFields = [];

    public function mount(ExitTicket $exitTicket)
    {
        $this->exitTicket      = $exitTicket;
        $this->exitTicket->qtt = '1';
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.exit-ticket.create');
    }

    public function submit()
    {
        $this->validate();

        $this->exitTicket->save();

        return redirect()->route('admin.exit-tickets.index');
    }

    protected function rules(): array
    {
        return [
            'exitTicket.product_id' => [
                'integer',
                'exists:prodouits,id',
                'nullable',
            ],
            'exitTicket.date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'exitTicket.qtt' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
            'exitTicket.bus_number_id' => [
                'integer',
                'exists:buses,id',
                'nullable',
            ],
            'exitTicket.number_exit_ticker' => [
                'string',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['product']    = Prodouit::pluck('name', 'id')->toArray();
        $this->listsForFields['bus_number'] = Bus::pluck('bus_number', 'id')->toArray();
    }
}
