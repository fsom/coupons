<?php

namespace App\Http\Requests;

use App\Models\Page;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('page_create');
    }

    public function rules()
    {
        return [
            'alias' => [
                'string',
                'required',
                'unique:pages',
            ],
            'headline' => [
                'string',
                'required',
            ],
            'content' => [
                'required',
            ],
            'meta_title' => [
                'string',
                'required',
            ],
            'meta_description' => [
                'string',
                'required',
            ],
        ];
    }
}
