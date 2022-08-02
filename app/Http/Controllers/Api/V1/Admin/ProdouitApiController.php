<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProdouitRequest;
use App\Http\Requests\UpdateProdouitRequest;
use App\Http\Resources\Admin\ProdouitResource;
use App\Models\Prodouit;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProdouitApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('prodouit_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ProdouitResource(Prodouit::all());
    }

    public function store(StoreProdouitRequest $request)
    {
        $prodouit = Prodouit::create($request->validated());

        return (new ProdouitResource($prodouit))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Prodouit $prodouit)
    {
        abort_if(Gate::denies('prodouit_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ProdouitResource($prodouit);
    }

    public function update(UpdateProdouitRequest $request, Prodouit $prodouit)
    {
        $prodouit->update($request->validated());

        return (new ProdouitResource($prodouit))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Prodouit $prodouit)
    {
        abort_if(Gate::denies('prodouit_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $prodouit->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
