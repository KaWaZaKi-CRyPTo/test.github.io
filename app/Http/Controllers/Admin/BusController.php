<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BusController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('bus_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bus.index');
    }

    public function create()
    {
        abort_if(Gate::denies('bus_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bus.create');
    }

    public function edit(Bus $bus)
    {
        abort_if(Gate::denies('bus_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bus.edit', compact('bus'));
    }

    public function show(Bus $bus)
    {
        abort_if(Gate::denies('bus_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bus->load('park');

        return view('admin.bus.show', compact('bus'));
    }
}
