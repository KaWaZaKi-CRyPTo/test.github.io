@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.fourniseur.title_singular') }}:
                    {{ trans('cruds.fourniseur.fields.id') }}
                    {{ $fourniseur->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.fourniseur.fields.id') }}
                            </th>
                            <td>
                                {{ $fourniseur->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.fourniseur.fields.name') }}
                            </th>
                            <td>
                                {{ $fourniseur->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.fourniseur.fields.email') }}
                            </th>
                            <td>
                                {{ $fourniseur->email }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.fourniseur.fields.phone') }}
                            </th>
                            <td>
                                {{ $fourniseur->phone }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('fourniseur_edit')
                    <a href="{{ route('admin.fourniseurs.edit', $fourniseur) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.fourniseurs.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection