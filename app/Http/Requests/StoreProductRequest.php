<?php

namespace App\Http\Requests;

use App\Models\Product;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProductRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:products',
            ],
            'title' => [
                'string',
                'nullable',
            ],
            'description' => [
                'string',
                'nullable',
            ],
            'ean' => [
                'string',
                'nullable',
            ],
            'gtin' => [
                'string',
                'nullable',
            ],
            'asin' => [
                'string',
                'nullable',
            ],
            'images' => [
                'array',
            ],
        ];
    }
}
