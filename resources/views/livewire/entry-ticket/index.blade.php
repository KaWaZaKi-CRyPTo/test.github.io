<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('entry_ticket_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="EntryTicket" format="csv" />
                <livewire:excel-export model="EntryTicket" format="xlsx" />
                <livewire:excel-export model="EntryTicket" format="pdf" />
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
                            {{ trans('cruds.entryTicket.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.entryTicket.fields.date') }}
                            @include('components.table.sort', ['field' => 'date'])
                        </th>
                        <th>
                            {{ trans('cruds.entryTicket.fields.product') }}
                            @include('components.table.sort', ['field' => 'product.name'])
                        </th>
                        <th>
                            {{ trans('cruds.entryTicket.fields.qtt') }}
                            @include('components.table.sort', ['field' => 'qtt'])
                        </th>
                        <th>
                            {{ trans('cruds.entryTicket.fields.price') }}
                            @include('components.table.sort', ['field' => 'price'])
                        </th>
                        <th>
                            {{ trans('cruds.entryTicket.fields.suplier') }}
                            @include('components.table.sort', ['field' => 'suplier.name'])
                        </th>
                        <th>
                            {{ trans('cruds.entryTicket.fields.n_bon_com') }}
                            @include('components.table.sort', ['field' => 'n_bon_com'])
                        </th>
                        <th>
                            {{ trans('cruds.entryTicket.fields.n_rec_fac_bl') }}
                            @include('components.table.sort', ['field' => 'n_rec_fac_bl'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($entryTickets as $entryTicket)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $entryTicket->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $entryTicket->id }}
                            </td>
                            <td>
                                {{ $entryTicket->date }}
                            </td>
                            <td>
                                @if($entryTicket->product)
                                    <span class="badge badge-relationship">{{ $entryTicket->product->name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $entryTicket->qtt }}
                            </td>
                            <td>
                                {{ $entryTicket->price }}
                            </td>
                            <td>
                                @if($entryTicket->suplier)
                                    <span class="badge badge-relationship">{{ $entryTicket->suplier->name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $entryTicket->n_bon_com }}
                            </td>
                            <td>
                                {{ $entryTicket->n_rec_fac_bl }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('entry_ticket_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.entry-tickets.show', $entryTicket) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('entry_ticket_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.entry-tickets.edit', $entryTicket) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('entry_ticket_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $entryTicket->id }})" wire:loading.attr="disabled">
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
            {{ $entryTickets->links() }}
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