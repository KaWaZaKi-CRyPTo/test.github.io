@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.vidangeControle.title_singular') }}:
                    {{ trans('cruds.vidangeControle.fields.id') }}
                    {{ $vidangeControle->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('vidange-controle.edit', [$vidangeControle])
        </div>
    </div>
</div>
@endsection