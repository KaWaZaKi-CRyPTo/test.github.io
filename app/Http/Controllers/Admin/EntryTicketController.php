<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EntryTicket;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EntryTicketController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('entry_ticket_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.entry-ticket.index');
    }

    public function create()
    {
        abort_if(Gate::denies('entry_ticket_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.entry-ticket.create');
    }

    public function edit(EntryTicket $entryTicket)
    {
        abort_if(Gate::denies('entry_ticket_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.entry-ticket.edit', compact('entryTicket'));
    }

    public function show(EntryTicket $entryTicket)
    {
        abort_if(Gate::denies('entry_ticket_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $entryTicket->load('product', 'suplier');

        return view('admin.entry-ticket.show', compact('entryTicket'));
    }
}
