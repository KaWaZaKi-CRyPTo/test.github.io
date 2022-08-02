<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('exit_ticket_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="ExitTicket" format="csv" />
                <livewire:excel-export model="ExitTicket" format="xlsx" />
                <livewire:excel-export model="ExitTicket" format="pdf" />
            @endif




        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.exitTicket.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.exitTicket.fields.product') }}
                            @include('components.table.sort', ['field' => 'product.name'])
                        </th>
                        <th>
                            {{ trans('cruds.exitTicket.fields.date') }}
                            @include('components.table.sort', ['field' => 'date'])
                        </th>
                        <th>
                            {{ trans('cruds.exitTicket.fields.qtt') }}
                            @include('components.table.sort', ['field' => 'qtt'])
                        </th>
                        <th>
                            {{ trans('cruds.exitTicket.fields.bus_number') }}
                            @include('components.table.sort', ['field' => 'bus_number.bus_number'])
                        </th>
                        <th>
                            {{ trans('cruds.exitTicket.fields.number_exit_ticker') }}
                            @include('components.table.sort', ['field' => 'number_exit_ticker'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($exitTickets as $exitTicket)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $exitTicket->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $exitTicket->id }}
                            </td>
                            <td>
                                @if($exitTicket->product)
                                    <span class="badge badge-relationship">{{ $exitTicket->product->name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $exitTicket->date }}
                            </td>
                            <td>
                                {{ $exitTicket->qtt }}
                            </td>
                            <td>
                                @if($exitTicket->busNumber)
                                    <span class="badge badge-relationship">{{ $exitTicket->busNumber->bus_number ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $exitTicket->number_exit_ticker }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('exit_ticket_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.exit-tickets.show', $exitTicket) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('exit_ticket_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.exit-tickets.edit', $exitTicket) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('exit_ticket_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $exitTicket->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $exitTickets->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush