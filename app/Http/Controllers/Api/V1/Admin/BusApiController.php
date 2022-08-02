<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBusRequest;
use App\Http\Requests\UpdateBusRequest;
use App\Http\Resources\Admin\BusResource;
use App\Models\Bus;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BusApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('bus_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new BusResource(Bus::with(['park'])->get());
    }

    public function store(StoreBusRequest $request)
    {
        $bus = Bus::create($request->validated());

        return (new BusResource($bus))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Bus $bus)
    {
        abort_if(Gate::denies('bus_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new BusResource($bus->load(['park']));
    }

    public function update(UpdateBusRequest $request, Bus $bus)
    {
        $bus->update($request->validated());

        return (new BusResource($bus))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Bus $bus)
    {
        abort_if(Gate::denies('bus_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bus->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
