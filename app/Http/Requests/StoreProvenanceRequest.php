<?php

namespace App\Http\Requests;

use App\Models\Provenance;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProvenanceRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('provenance_create'),
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
            'distance' => [
                'string',
                'nullable',
            ],
            'country_id' => [
                'integer',
                'exists:countries,id',
                'required',
            ],
        ];
    }
}
