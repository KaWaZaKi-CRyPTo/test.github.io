@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.inventory.title_singular') }}:
                    {{ trans('cruds.inventory.fields.id') }}
                    {{ $inventory->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.inventory.fields.id') }}
                            </th>
                            <td>
                                {{ $inventory->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.inventory.fields.product') }}
                            </th>
                            <td>
                                @if($inventory->product)
                                    <span class="badge badge-relationship">{{ $inventory->product->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.inventory.fields.qtt_init') }}
                            </th>
                            <td>
                                {{ $inventory->qtt_init }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.inventory.fields.final_qtt') }}
                            </th>
                            <td>
                                {{ $inventory->final_qtt }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('inventory_edit')
                    <a href="{{ route('admin.inventories.edit', $inventory) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.inventories.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection