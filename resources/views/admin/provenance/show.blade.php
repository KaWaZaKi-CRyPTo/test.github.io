@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.provenance.title_singular') }}:
                    {{ trans('cruds.provenance.fields.id') }}
                    {{ $provenance->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.provenance.fields.id') }}
                            </th>
                            <td>
                                {{ $provenance->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.provenance.fields.name') }}
                            </th>
                            <td>
                                {{ $provenance->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.provenance.fields.distance') }}
                            </th>
                            <td>
                                {{ $provenance->distance }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.provenance.fields.country') }}
                            </th>
                            <td>
                                @if($provenance->country)
                                    <span class="badge badge-relationship">{{ $provenance->country->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('provenance_edit')
                    <a href="{{ route('admin.provenances.edit', $provenance) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.provenances.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection