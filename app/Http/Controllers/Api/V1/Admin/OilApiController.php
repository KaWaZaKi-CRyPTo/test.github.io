<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOilRequest;
use App\Http\Requests\UpdateOilRequest;
use App\Http\Resources\Admin\OilResource;
use App\Models\Oil;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OilApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('oil_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OilResource(Oil::all());
    }

    public function store(StoreOilRequest $request)
    {
        $oil = Oil::create($request->validated());

        return (new OilResource($oil))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Oil $oil)
    {
        abort_if(Gate::denies('oil_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OilResource($oil);
    }

    public function update(UpdateOilRequest $request, Oil $oil)
    {
        $oil->update($request->validated());

        return (new OilResource($oil))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Oil $oil)
    {
        abort_if(Gate::denies('oil_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $oil->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
