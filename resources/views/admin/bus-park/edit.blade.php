@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.busPark.title_singular') }}:
                    {{ trans('cruds.busPark.fields.id') }}
                    {{ $busPark->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('bus-park.edit', [$busPark])
        </div>
    </div>
</div>
@endsection