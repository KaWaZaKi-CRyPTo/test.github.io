@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.route.title_singular') }}:
                    {{ trans('cruds.route.fields.id') }}
                    {{ $route->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.route.fields.id') }}
                            </th>
                            <td>
                                {{ $route->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.route.fields.name') }}
                            </th>
                            <td>
                                {{ $route->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.route.fields.start_provenance') }}
                            </th>
                            <td>
                                @if($route->startProvenance)
                                    <span class="badge badge-relationship">{{ $route->startProvenance->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.route.fields.end_provenance') }}
                            </th>
                            <td>
                                @if($route->endProvenance)
                                    <span class="badge badge-relationship">{{ $route->endProvenance->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.route.fields.distance') }}
                            </th>
                            <td>
                                {{ $route->distance }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('route_edit')
                    <a href="{{ route('admin.routes.edit', $route) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.routes.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection