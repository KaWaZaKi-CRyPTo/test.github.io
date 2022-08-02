@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.city.title_singular') }}:
                    {{ trans('cruds.city.fields.id') }}
                    {{ $city->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.city.fields.id') }}
                            </th>
                            <td>
                                {{ $city->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.city.fields.country') }}
                            </th>
                            <td>
                                @if($city->country)
                                    <span class="badge badge-relationship">{{ $city->country->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.city.fields.name') }}
                            </th>
                            <td>
                                {{ $city->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.city.fields.slug') }}
                            </th>
                            <td>
                                {{ $city->slug }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('city_edit')
                    <a href="{{ route('admin.cities.edit', $city) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.cities.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection