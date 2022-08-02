<?php

namespace App\Http\Requests;

use App\Models\Bus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreBusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('bus_create'),
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
            'bus_number' => [
                'string',
                'required',
            ],
            'counetr' => [
                'string',
                'nullable',
            ],
            'mark' => [
                'string',
                'nullable',
            ],
            'park_id' => [
                'integer',
                'exists:bus_parks,id',
                'nullable',
            ],
        ];
    }
}
