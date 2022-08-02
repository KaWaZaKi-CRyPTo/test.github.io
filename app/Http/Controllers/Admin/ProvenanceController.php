<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Provenance;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProvenanceController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('provenance_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.provenance.index');
    }

    public function create()
    {
        abort_if(Gate::denies('provenance_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.provenance.create');
    }

    public function edit(Provenance $provenance)
    {
        abort_if(Gate::denies('provenance_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.provenance.edit', compact('provenance'));
    }

    public function show(Provenance $provenance)
    {
        abort_if(Gate::denies('provenance_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $provenance->load('country');

        return view('admin.provenance.show', compact('provenance'));
    }
}
