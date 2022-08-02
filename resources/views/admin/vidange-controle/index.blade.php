@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-white">
        <div class="card-header border-b border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.vidangeControle.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('vidange_controle_create')
                    <a class="btn btn-indigo" href="{{ route('admin.vidange-controles.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.vidangeControle.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('vidange-controle.index')

    </div>
</div>
@endsection