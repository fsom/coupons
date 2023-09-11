<?php

namespace App\Http\Requests;

use App\Models\Coupon;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCouponRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('coupon_edit');
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
            'code' => [
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
            'description' => [
                'string',
                'required',
            ],
        ];
    }
}
