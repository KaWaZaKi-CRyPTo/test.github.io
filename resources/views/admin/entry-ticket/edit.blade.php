@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.entryTicket.title_singular') }}:
                    {{ trans('cruds.entryTicket.fields.id') }}
                    {{ $entryTicket->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('entry-ticket.edit', [$entryTicket])
        </div>
    </div>
</div>
@endsection