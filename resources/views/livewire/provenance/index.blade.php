<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('provenance_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Provenance" format="csv" />
                <livewire:excel-export model="Provenance" format="xlsx" />
                <livewire:excel-export model="Provenance" format="pdf" />
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
                            {{ trans('cruds.provenance.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.provenance.fields.name') }}
                            @include('components.table.sort', ['field' => 'name'])
                        </th>
                        <th>
                            {{ trans('cruds.provenance.fields.distance') }}
                            @include('components.table.sort', ['field' => 'distance'])
                        </th>
                        <th>
                            {{ trans('cruds.provenance.fields.country') }}
                            @include('components.table.sort', ['field' => 'country.name'])
                        </th>
                        <th>
                            {{ trans('cruds.country.fields.slug') }}
                            @include('components.table.sort', ['field' => 'country.slug'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($provenances as $provenance)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $provenance->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $provenance->id }}
                            </td>
                            <td>
                                {{ $provenance->name }}
                            </td>
                            <td>
                                {{ $provenance->distance }}
                            </td>
                            <td>
                                @if($provenance->country)
                                    <span class="badge badge-relationship">{{ $provenance->country->name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($provenance->country)
                                    {{ $provenance->country->slug ?? '' }}
                                @endif
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('provenance_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.provenances.show', $provenance) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('provenance_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.provenances.edit', $provenance) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('provenance_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $provenance->id }})" wire:loading.attr="disabled">
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
            {{ $provenances->links() }}
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