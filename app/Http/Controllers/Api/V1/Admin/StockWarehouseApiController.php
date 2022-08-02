<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStockWarehouseRequest;
use App\Http\Requests\UpdateStockWarehouseRequest;
use App\Http\Resources\Admin\StockWarehouseResource;
use App\Models\StockWarehouse;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StockWarehouseApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('stock_warehouse_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new StockWarehouseResource(StockWarehouse::with(['country', 'city'])->get());
    }

    public function store(StoreStockWarehouseRequest $request)
    {
        $stockWarehouse = StockWarehouse::create($request->validated());

        return (new StockWarehouseResource($stockWarehouse))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(StockWarehouse $stockWarehouse)
    {
        abort_if(Gate::denies('stock_warehouse_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new StockWarehouseResource($stockWarehouse->load(['country', 'city']));
    }

    public function update(UpdateStockWarehouseRequest $request, StockWarehouse $stockWarehouse)
    {
        $stockWarehouse->update($request->validated());

        return (new StockWarehouseResource($stockWarehouse))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(StockWarehouse $stockWarehouse)
    {
        abort_if(Gate::denies('stock_warehouse_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stockWarehouse->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
