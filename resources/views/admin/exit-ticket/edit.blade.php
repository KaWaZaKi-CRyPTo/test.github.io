@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.exitTicket.title_singular') }}:
                    {{ trans('cruds.exitTicket.fields.id') }}
                    {{ $exitTicket->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('exit-ticket.edit', [$exitTicket])
        </div>
    </div>
</div>
@endsection