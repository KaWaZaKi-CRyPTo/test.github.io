<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVidangeControleRequest;
use App\Http\Requests\UpdateVidangeControleRequest;
use App\Http\Resources\Admin\VidangeControleResource;
use App\Models\VidangeControle;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VidangeControleApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('vidange_controle_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new VidangeControleResource(VidangeControle::with(['bus', 'oil'])->get());
    }

    public function store(StoreVidangeControleRequest $request)
    {
        $vidangeControle = VidangeControle::create($request->validated());

        return (new VidangeControleResource($vidangeControle))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(VidangeControle $vidangeControle)
    {
        abort_if(Gate::denies('vidange_controle_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new VidangeControleResource($vidangeControle->load(['bus', 'oil']));
    }

    public function update(UpdateVidangeControleRequest $request, VidangeControle $vidangeControle)
    {
        $vidangeControle->update($request->validated());

        return (new VidangeControleResource($vidangeControle))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(VidangeControle $vidangeControle)
    {
        abort_if(Gate::denies('vidange_controle_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vidangeControle->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
