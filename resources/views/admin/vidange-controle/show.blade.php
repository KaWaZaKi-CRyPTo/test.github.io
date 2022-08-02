@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.vidangeControle.title_singular') }}:
                    {{ trans('cruds.vidangeControle.fields.id') }}
                    {{ $vidangeControle->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.vidangeControle.fields.id') }}
                            </th>
                            <td>
                                {{ $vidangeControle->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.vidangeControle.fields.bus') }}
                            </th>
                            <td>
                                @if($vidangeControle->bus)
                                    <span class="badge badge-relationship">{{ $vidangeControle->bus->bus_number ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.vidangeControle.fields.oil') }}
                            </th>
                            <td>
                                @if($vidangeControle->oil)
                                    <span class="badge badge-relationship">{{ $vidangeControle->oil->mark_oil ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.vidangeControle.fields.anicien_number') }}
                            </th>
                            <td>
                                {{ $vidangeControle->anicien_number }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.vidangeControle.fields.new_number') }}
                            </th>
                            <td>
                                {{ $vidangeControle->new_number }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.vidangeControle.fields.last_date') }}
                            </th>
                            <td>
                                {{ $vidangeControle->last_date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.vidangeControle.fields.date') }}
                            </th>
                            <td>
                                {{ $vidangeControle->date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.vidangeControle.fields.oil_qtt') }}
                            </th>
                            <td>
                                {{ $vidangeControle->oil_qtt }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('vidange_controle_edit')
                    <a href="{{ route('admin.vidange-controles.edit', $vidangeControle) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.vidange-controles.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection