<?php

namespace App\Http\Requests;

use App\Models\StockWarehouse;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStockWarehouseRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('stock_warehouse_create'),
            response()->json(
                ['message' => 'This action is unauthorized.'],
                Response::HTTP_FORBIDDEN
            ),
        );

        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'country_id' => [
                'integer',
                'exists:countries,id',
                'required',
            ],
            'city_id' => [
                'integer',
                'exists:cities,id',
                'required',
            ],
        ];
    }
}
