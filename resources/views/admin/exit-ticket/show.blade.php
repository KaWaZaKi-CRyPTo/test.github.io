@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.exitTicket.title_singular') }}:
                    {{ trans('cruds.exitTicket.fields.id') }}
                    {{ $exitTicket->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.exitTicket.fields.id') }}
                            </th>
                            <td>
                                {{ $exitTicket->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.exitTicket.fields.product') }}
                            </th>
                            <td>
                                @if($exitTicket->product)
                                    <span class="badge badge-relationship">{{ $exitTicket->product->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.exitTicket.fields.date') }}
                            </th>
                            <td>
                                {{ $exitTicket->date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.exitTicket.fields.qtt') }}
                            </th>
                            <td>
                                {{ $exitTicket->qtt }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.exitTicket.fields.bus_number') }}
                            </th>
                            <td>
                                @if($exitTicket->busNumber)
                                    <span class="badge badge-relationship">{{ $exitTicket->busNumber->bus_number ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.exitTicket.fields.number_exit_ticker') }}
                            </th>
                            <td>
                                {{ $exitTicket->number_exit_ticker }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('exit_ticket_edit')
                    <a href="{{ route('admin.exit-tickets.edit', $exitTicket) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.exit-tickets.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection