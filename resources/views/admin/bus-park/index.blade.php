@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-white">
        <div class="card-header border-b border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.busPark.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('bus_park_create')
                    <a class="btn btn-indigo" href="{{ route('admin.bus-parks.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.busPark.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('bus-park.index')

    </div>
</div>
@endsection