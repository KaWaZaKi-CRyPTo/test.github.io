<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEntryTicketRequest;
use App\Http\Requests\UpdateEntryTicketRequest;
use App\Http\Resources\Admin\EntryTicketResource;
use App\Models\EntryTicket;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EntryTicketApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('entry_ticket_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EntryTicketResource(EntryTicket::with(['product', 'suplier'])->get());
    }

    public function store(StoreEntryTicketRequest $request)
    {
        $entryTicket = EntryTicket::create($request->validated());

        return (new EntryTicketResource($entryTicket))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(EntryTicket $entryTicket)
    {
        abort_if(Gate::denies('entry_ticket_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new EntryTicketResource($entryTicket->load(['product', 'suplier']));
    }

    public function update(UpdateEntryTicketRequest $request, EntryTicket $entryTicket)
    {
        $entryTicket->update($request->validated());

        return (new EntryTicketResource($entryTicket))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(EntryTicket $entryTicket)
    {
        abort_if(Gate::denies('entry_ticket_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $entryTicket->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
