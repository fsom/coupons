<?php

namespace App\Http\Requests;

use App\Models\Shop;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreShopRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('shop_create');
    }

    public function rules()
    {
        return [
            'region' => [
                'required',
            ],
            'domain' => [
                'string',
                'required',
                'unique:shops',
            ],
            'titel' => [
                'string',
                'nullable',
            ],
            'description' => [
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
            'facebook' => [
                'string',
                'nullable',
            ],
            'twitter' => [
                'string',
                'nullable',
            ],
            'instagram' => [
                'string',
                'nullable',
            ],
            'linkedin' => [
                'string',
                'nullable',
            ],
            'youtube' => [
                'string',
                'nullable',
            ],
            'tiktok' => [
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
        ];
    }
}
