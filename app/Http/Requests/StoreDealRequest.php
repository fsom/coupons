<?php

namespace App\Http\Requests;

use App\Models\Deal;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDealRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('deal_create');
    }

    public function rules()
    {
        return [
            'shop_id' => [
                'required',
                'integer',
            ],
            'title' => [
                'string',
                'required',
            ],
            'description' => [
                'string',
                'required',
            ],
            'value' => [
                'string',
                'required',
            ],
            'until' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'landingpage' => [
                'string',
                'required',
            ],
        ];
    }
}
