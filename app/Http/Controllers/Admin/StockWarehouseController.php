<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StockWarehouse;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StockWarehouseController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('stock_warehouse_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.stock-warehouse.index');
    }

    public function create()
    {
        abort_if(Gate::denies('stock_warehouse_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.stock-warehouse.create');
    }

    public function edit(StockWarehouse $stockWarehouse)
    {
        abort_if(Gate::denies('stock_warehouse_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.stock-warehouse.edit', compact('stockWarehouse'));
    }

    public function show(StockWarehouse $stockWarehouse)
    {
        abort_if(Gate::denies('stock_warehouse_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stockWarehouse->load('country', 'city');

        return view('admin.stock-warehouse.show', compact('stockWarehouse'));
    }
}
