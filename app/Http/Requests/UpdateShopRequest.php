<?php

namespace App\Http\Requests;

use App\Models\Shop;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateShopRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('shop_edit');
    }

    public function rules()
    {
        return [
            'alias' => [
                'string',
                'required',
                'unique:shops,alias,' . request()->route('shop')->id,
            ],
            'region' => [
                'required',
            ],
            'domain' => [
                'string',
                'nullable',
            ],
            'url' => [
                'string',
                'required',
            ],
            'name' => [
                'string',
                'nullable',
            ],
            'meta_title' => [
                'string',
                'nullable',
            ],
            'meta_description' => [
                'string',
                'nullable',
            ],
            'offerspage' => [
                'string',
                'nullable',
            ],
            'contactpage' => [
                'string',
                'nullable',
            ],
            'imprint' => [
                'string',
                'nullable',
            ],
            'adress' => [
                'string',
                'nullable',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
            'icon' => [
                'string',
                'nullable',
            ],
            'affiliate' => [
                'string',
                'nullable',
            ],
            'email' => [
                'string',
                'nullable',
            ],
            'header_redirect' => [
                'string',
                'nullable',
            ],
            'ip' => [
                'string',
                'nullable',
            ],
            'svol' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'keywords' => [
                'string',
                'nullable',
            ],
        ];
    }
}
