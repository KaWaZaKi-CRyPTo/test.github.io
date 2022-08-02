<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fourniseur;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FourniseurController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('fourniseur_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.fourniseur.index');
    }

    public function create()
    {
        abort_if(Gate::denies('fourniseur_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.fourniseur.create');
    }

    public function edit(Fourniseur $fourniseur)
    {
        abort_if(Gate::denies('fourniseur_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.fourniseur.edit', compact('fourniseur'));
    }

    public function show(Fourniseur $fourniseur)
    {
        abort_if(Gate::denies('fourniseur_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.fourniseur.show', compact('fourniseur'));
    }
}
