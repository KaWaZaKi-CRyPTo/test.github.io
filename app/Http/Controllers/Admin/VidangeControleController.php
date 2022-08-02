<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VidangeControle;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VidangeControleController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('vidange_controle_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.vidange-controle.index');
    }

    public function create()
    {
        abort_if(Gate::denies('vidange_controle_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.vidange-controle.create');
    }

    public function edit(VidangeControle $vidangeControle)
    {
        abort_if(Gate::denies('vidange_controle_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.vidange-controle.edit', compact('vidangeControle'));
    }

    public function show(VidangeControle $vidangeControle)
    {
        abort_if(Gate::denies('vidange_controle_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vidangeControle->load('bus', 'oil');

        return view('admin.vidange-controle.show', compact('vidangeControle'));
    }
}
