@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.prodouit.title_singular') }}:
                    {{ trans('cruds.prodouit.fields.id') }}
                    {{ $prodouit->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.prodouit.fields.id') }}
                            </th>
                            <td>
                                {{ $prodouit->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.prodouit.fields.name') }}
                            </th>
                            <td>
                                {{ $prodouit->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.prodouit.fields.mark') }}
                            </th>
                            <td>
                                {{ $prodouit->mark }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.prodouit.fields.price') }}
                            </th>
                            <td>
                                {{ $prodouit->price }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('prodouit_edit')
                    <a href="{{ route('admin.prodouits.edit', $prodouit) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.prodouits.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection