@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.coupon.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.coupons.update", [$coupon->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="shop_id">{{ trans('cruds.coupon.fields.shop') }}</label>
                <select class="form-control select2 {{ $errors->has('shop') ? 'is-invalid' : '' }}" name="shop_id" id="shop_id" required>
                    @foreach($shops as $id => $entry)
                        <option value="{{ $id }}" {{ (old('shop_id') ? old('shop_id') : $coupon->shop->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('shop'))
                    <span class="text-danger">{{ $errors->first('shop') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.shop_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.coupon.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $coupon->title) }}" required>
                @if($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="code">{{ trans('cruds.coupon.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', $coupon->code) }}" required>
                @if($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="value">{{ trans('cruds.coupon.fields.value') }}</label>
                <input class="form-control {{ $errors->has('value') ? 'is-invalid' : '' }}" type="text" name="value" id="value" value="{{ old('value', $coupon->value) }}" required>
                @if($errors->has('value'))
                    <span class="text-danger">{{ $errors->first('value') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.value_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="until">{{ trans('cruds.coupon.fields.until') }}</label>
                <input class="form-control date {{ $errors->has('until') ? 'is-invalid' : '' }}" type="text" name="until" id="until" value="{{ old('until', $coupon->until) }}" required>
                @if($errors->has('until'))
                    <span class="text-danger">{{ $errors->first('until') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.until_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="landingpage">{{ trans('cruds.coupon.fields.landingpage') }}</label>
                <input class="form-control {{ $errors->has('landingpage') ? 'is-invalid' : '' }}" type="text" name="landingpage" id="landingpage" value="{{ old('landingpage', $coupon->landingpage) }}" required>
                @if($errors->has('landingpage'))
                    <span class="text-danger">{{ $errors->first('landingpage') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.landingpage_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="rules">{{ trans('cruds.coupon.fields.rules') }}</label>
                <textarea class="form-control {{ $errors->has('rules') ? 'is-invalid' : '' }}" name="rules" id="rules">{{ old('rules', $coupon->rules) }}</textarea>
                @if($errors->has('rules'))
                    <span class="text-danger">{{ $errors->first('rules') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.rules_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="description">{{ trans('cruds.coupon.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $coupon->description) }}" required>
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.coupon.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection