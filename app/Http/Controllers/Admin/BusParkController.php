<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BusPark;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BusParkController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('bus_park_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bus-park.index');
    }

    public function create()
    {
        abort_if(Gate::denies('bus_park_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bus-park.create');
    }

    public function edit(BusPark $busPark)
    {
        abort_if(Gate::denies('bus_park_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bus-park.edit', compact('busPark'));
    }

    public function show(BusPark $busPark)
    {
        abort_if(Gate::denies('bus_park_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $busPark->load('country', 'city');

        return view('admin.bus-park.show', compact('busPark'));
    }
}
