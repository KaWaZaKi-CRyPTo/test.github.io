<?php

namespace App\Http\Requests;

use App\Models\Oil;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOilRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('oil_edit'),
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
            'mark_oil' => [
                'string',
                'required',
            ],
            'oil_distance' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
        ];
    }
}
