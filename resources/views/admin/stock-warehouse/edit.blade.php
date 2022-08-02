@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.stockWarehouse.title_singular') }}:
                    {{ trans('cruds.stockWarehouse.fields.id') }}
                    {{ $stockWarehouse->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('stock-warehouse.edit', [$stockWarehouse])
        </div>
    </div>
</div>
@endsection