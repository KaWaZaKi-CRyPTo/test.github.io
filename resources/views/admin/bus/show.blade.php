@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.bus.title_singular') }}:
                    {{ trans('cruds.bus.fields.id') }}
                    {{ $bus->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.bus.fields.id') }}
                            </th>
                            <td>
                                {{ $bus->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.bus.fields.bus_number') }}
                            </th>
                            <td>
                                {{ $bus->bus_number }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.bus.fields.counetr') }}
                            </th>
                            <td>
                                {{ $bus->counetr }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.bus.fields.mark') }}
                            </th>
                            <td>
                                {{ $bus->mark }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.bus.fields.park') }}
                            </th>
                            <td>
                                @if($bus->park)
                                    <span class="badge badge-relationship">{{ $bus->park->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('bus_edit')
                    <a href="{{ route('admin.buses.edit', $bus) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.buses.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection