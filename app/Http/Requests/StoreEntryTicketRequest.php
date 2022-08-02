<?php

namespace App\Http\Requests;

use App\Models\EntryTicket;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEntryTicketRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('entry_ticket_create'),
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
            'date' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'product_id' => [
                'integer',
                'exists:prodouits,id',
                'nullable',
            ],
            'qtt' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'price' => [
                'numeric',
                'nullable',
            ],
            'suplier_id' => [
                'integer',
                'exists:fourniseurs,id',
                'nullable',
            ],
            'n_bon_com' => [
                'string',
                'nullable',
            ],
            'n_rec_fac_bl' => [
                'string',
                'nullable',
            ],
        ];
    }
}
