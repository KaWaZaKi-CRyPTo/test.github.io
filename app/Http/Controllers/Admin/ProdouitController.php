<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prodouit;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProdouitController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('prodouit_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.prodouit.index');
    }

    public function create()
    {
        abort_if(Gate::denies('prodouit_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.prodouit.create');
    }

    public function edit(Prodouit $prodouit)
    {
        abort_if(Gate::denies('prodouit_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.prodouit.edit', compact('prodouit'));
    }

    public function show(Prodouit $prodouit)
    {
        abort_if(Gate::denies('prodouit_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.prodouit.show', compact('prodouit'));
    }
}
