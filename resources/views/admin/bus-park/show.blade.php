@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.busPark.title_singular') }}:
                    {{ trans('cruds.busPark.fields.id') }}
                    {{ $busPark->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.busPark.fields.id') }}
                            </th>
                            <td>
                                {{ $busPark->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.busPark.fields.name') }}
                            </th>
                            <td>
                                {{ $busPark->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.busPark.fields.code') }}
                            </th>
                            <td>
                                {{ $busPark->code }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.busPark.fields.country') }}
                            </th>
                            <td>
                                @if($busPark->country)
                                    <span class="badge badge-relationship">{{ $busPark->country->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.busPark.fields.city') }}
                            </th>
                            <td>
                                @if($busPark->city)
                                    <span class="badge badge-relationship">{{ $busPark->city->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('bus_park_edit')
                    <a href="{{ route('admin.bus-parks.edit', $busPark) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.bus-parks.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection