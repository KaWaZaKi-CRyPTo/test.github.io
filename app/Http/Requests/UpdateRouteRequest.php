<?php

namespace App\Http\Requests;

use App\Models\Route;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateRouteRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('route_edit'),
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
            'start_provenance_id' => [
                'integer',
                'exists:provenances,id',
                'nullable',
            ],
            'end_provenance_id' => [
                'integer',
                'exists:provenances,id',
                'nullable',
            ],
            'distance' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'nullable',
            ],
        ];
    }
}
