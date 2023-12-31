<?php

namespace App\Http\Requests;

use App\Models\Tag;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTagRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('tag_edit');
    }

    public function rules()
    {
        return [
            'region' => [
                'required',
            ],
            'name' => [
                'string',
                'required',
                'unique:tags,name,' . request()->route('tag')->id,
            ],
            'title' => [
                'string',
                'nullable',
            ],
            'description' => [
                'string',
                'nullable',
            ],
        ];
    }
}
