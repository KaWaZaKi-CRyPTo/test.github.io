@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.entryTicket.title_singular') }}:
                    {{ trans('cruds.entryTicket.fields.id') }}
                    {{ $entryTicket->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.entryTicket.fields.id') }}
                            </th>
                            <td>
                                {{ $entryTicket->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.entryTicket.fields.date') }}
                            </th>
                            <td>
                                {{ $entryTicket->date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.entryTicket.fields.product') }}
                            </th>
                            <td>
                                @if($entryTicket->product)
                                    <span class="badge badge-relationship">{{ $entryTicket->product->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.entryTicket.fields.qtt') }}
                            </th>
                            <td>
                                {{ $entryTicket->qtt }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.entryTicket.fields.price') }}
                            </th>
                            <td>
                                {{ $entryTicket->price }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.entryTicket.fields.suplier') }}
                            </th>
                            <td>
                                @if($entryTicket->suplier)
                                    <span class="badge badge-relationship">{{ $entryTicket->suplier->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.entryTicket.fields.n_bon_com') }}
                            </th>
                            <td>
                                {{ $entryTicket->n_bon_com }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.entryTicket.fields.n_rec_fac_bl') }}
                            </th>
                            <td>
                                {{ $entryTicket->n_rec_fac_bl }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('entry_ticket_edit')
                    <a href="{{ route('admin.entry-tickets.edit', $entryTicket) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.entry-tickets.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection