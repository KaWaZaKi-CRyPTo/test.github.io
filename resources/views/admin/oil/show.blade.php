@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.oil.title_singular') }}:
                    {{ trans('cruds.oil.fields.id') }}
                    {{ $oil->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.oil.fields.id') }}
                            </th>
                            <td>
                                {{ $oil->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.oil.fields.mark_oil') }}
                            </th>
                            <td>
                                {{ $oil->mark_oil }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.oil.fields.oil_distance') }}
                            </th>
                            <td>
                                {{ $oil->oil_distance }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('oil_edit')
                    <a href="{{ route('admin.oils.edit', $oil) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.oils.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection