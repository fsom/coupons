<?php

namespace App\Http\Requests;

use App\Models\Post;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePostRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('post_edit');
    }

    public function rules()
    {
        return [
            'alias' => [
                'string',
                'required',
            ],
            'meta_title' => [
                'string',
                'max:60',
                'required',
            ],
            'meta_description' => [
                'string',
                'max:160',
                'required',
            ],
            'headline' => [
                'string',
                'required',
            ],
            'content' => [
                'required',
            ],
            'category' => [
                'string',
                'nullable',
            ],
            'tags' => [
                'string',
                'nullable',
            ],
            'published_at' => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
        ];
    }
}
