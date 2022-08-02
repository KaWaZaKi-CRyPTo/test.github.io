<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFourniseurRequest;
use App\Http\Requests\UpdateFourniseurRequest;
use App\Http\Resources\Admin\FourniseurResource;
use App\Models\Fourniseur;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FourniseurApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('fourniseur_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FourniseurResource(Fourniseur::all());
    }

    public function store(StoreFourniseurRequest $request)
    {
        $fourniseur = Fourniseur::create($request->validated());

        return (new FourniseurResource($fourniseur))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Fourniseur $fourniseur)
    {
        abort_if(Gate::denies('fourniseur_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FourniseurResource($fourniseur);
    }

    public function update(UpdateFourniseurRequest $request, Fourniseur $fourniseur)
    {
        $fourniseur->update($request->validated());

        return (new FourniseurResource($fourniseur))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Fourniseur $fourniseur)
    {
        abort_if(Gate::denies('fourniseur_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fourniseur->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
