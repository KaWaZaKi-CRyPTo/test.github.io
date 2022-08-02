<?php

namespace App\Http\Requests;

use App\Models\BusPark;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreBusParkRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('bus_park_create'),
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
                'nullable',
            ],
            'code' => [
                'string',
                'nullable',
            ],
            'country_id' => [
                'integer',
                'exists:countries,id',
                'nullable',
            ],
            'city_id' => [
                'integer',
                'exists:cities,id',
                'nullable',
            ],
        ];
    }
}
