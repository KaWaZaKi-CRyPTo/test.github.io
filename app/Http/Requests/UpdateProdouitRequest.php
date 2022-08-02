<?php

namespace App\Http\Requests;

use App\Models\Prodouit;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProdouitRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('prodouit_edit'),
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
            'mark' => [
                'string',
                'nullable',
            ],
            'price' => [
                'numeric',
                'nullable',
            ],
        ];
    }
}
