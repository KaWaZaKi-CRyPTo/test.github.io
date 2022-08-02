<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Oil;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OilController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('oil_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.oil.index');
    }

    public function create()
    {
        abort_if(Gate::denies('oil_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.oil.create');
    }

    public function edit(Oil $oil)
    {
        abort_if(Gate::denies('oil_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.oil.edit', compact('oil'));
    }

    public function show(Oil $oil)
    {
        abort_if(Gate::denies('oil_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.oil.show', compact('oil'));
    }
}
