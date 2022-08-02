<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProvenanceRequest;
use App\Http\Requests\UpdateProvenanceRequest;
use App\Http\Resources\Admin\ProvenanceResource;
use App\Models\Provenance;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProvenanceApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('provenance_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ProvenanceResource(Provenance::with(['country'])->get());
    }

    public function store(StoreProvenanceRequest $request)
    {
        $provenance = Provenance::create($request->validated());

        return (new ProvenanceResource($provenance))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Provenance $provenance)
    {
        abort_if(Gate::denies('provenance_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ProvenanceResource($provenance->load(['country']));
    }

    public function update(UpdateProvenanceRequest $request, Provenance $provenance)
    {
        $provenance->update($request->validated());

        return (new ProvenanceResource($provenance))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Provenance $provenance)
    {
        abort_if(Gate::denies('provenance_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $provenance->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
