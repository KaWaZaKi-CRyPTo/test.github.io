<?php

namespace App\Http\Requests;

use App\Models\VidangeControle;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreVidangeControleRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('vidange_controle_create'),
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
            'bus_id' => [
                'integer',
                'exists:buses,id',
                'required',
            ],
            'oil_id' => [
                'integer',
                'exists:oils,id',
                'required',
            ],
            'anicien_number' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'new_number' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'last_date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'oil_qtt' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
        ];
    }
}
