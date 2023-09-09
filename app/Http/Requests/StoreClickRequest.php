<?php

namespace App\Http\Requests;

use App\Models\Click;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreClickRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('click_create');
    }

    public function rules()
    {
        return [
            'uuid' => [
                'string',
                'nullable',
            ],
            'landingpage' => [
                'string',
                'nullable',
            ],
            'utm_source' => [
                'string',
                'nullable',
            ],
            'utm_medium' => [
                'string',
                'nullable',
            ],
            'utm_campaign' => [
                'string',
                'nullable',
            ],
        ];
    }
}
