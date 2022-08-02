<?php

namespace App\Http\Requests;

use App\Models\Fourniseur;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFourniseurRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('fourniseur_create'),
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
            'email' => [
                'string',
                'nullable',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
        ];
    }
}
