<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBusParkRequest;
use App\Http\Requests\UpdateBusParkRequest;
use App\Http\Resources\Admin\BusParkResource;
use App\Models\BusPark;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BusParkApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('bus_park_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new BusParkResource(BusPark::with(['country', 'city'])->get());
    }

    public function store(StoreBusParkRequest $request)
    {
        $busPark = BusPark::create($request->validated());

        return (new BusParkResource($busPark))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(BusPark $busPark)
    {
        abort_if(Gate::denies('bus_park_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new BusParkResource($busPark->load(['country', 'city']));
    }

    public function update(UpdateBusParkRequest $request, BusPark $busPark)
    {
        $busPark->update($request->validated());

        return (new BusParkResource($busPark))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(BusPark $busPark)
    {
        abort_if(Gate::denies('bus_park_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $busPark->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
