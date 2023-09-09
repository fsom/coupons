<?php

namespace App\Http\Requests;

use App\Models\View;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateViewRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('view_edit');
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
