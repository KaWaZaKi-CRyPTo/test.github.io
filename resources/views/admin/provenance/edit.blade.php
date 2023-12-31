@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.provenance.title_singular') }}:
                    {{ trans('cruds.provenance.fields.id') }}
                    {{ $provenance->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('provenance.edit', [$provenance])
        </div>
    </div>
</div>
@endsection