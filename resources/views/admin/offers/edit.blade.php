@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.offer.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.offers.update", [$offer->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="shop_id">{{ trans('cruds.offer.fields.shop') }}</label>
                <select class="form-control select2 {{ $errors->has('shop') ? 'is-invalid' : '' }}" name="shop_id" id="shop_id" required>
                    @foreach($shops as $id => $entry)
                        <option value="{{ $id }}" {{ (old('shop_id') ? old('shop_id') : $offer->shop->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('shop'))
                    <span class="text-danger">{{ $errors->first('shop') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.offer.fields.shop_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.offer.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $offer->title) }}" required>
                @if($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.offer.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="description">{{ trans('cruds.offer.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $offer->description) }}" required>
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.offer.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="value">{{ trans('cruds.offer.fields.value') }}</label>
                <input class="form-control {{ $errors->has('value') ? 'is-invalid' : '' }}" type="text" name="value" id="value" value="{{ old('value', $offer->value) }}" required>
                @if($errors->has('value'))
                    <span class="text-danger">{{ $errors->first('value') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.offer.fields.value_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="until">{{ trans('cruds.offer.fields.until') }}</label>
                <input class="form-control date {{ $errors->has('until') ? 'is-invalid' : '' }}" type="text" name="until" id="until" value="{{ old('until', $offer->until) }}" required>
                @if($errors->has('until'))
                    <span class="text-danger">{{ $errors->first('until') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.offer.fields.until_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="landingpage">{{ trans('cruds.offer.fields.landingpage') }}</label>
                <input class="form-control {{ $errors->has('landingpage') ? 'is-invalid' : '' }}" type="text" name="landingpage" id="landingpage" value="{{ old('landingpage', $offer->landingpage) }}" required>
                @if($errors->has('landingpage'))
                    <span class="text-danger">{{ $errors->first('landingpage') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.offer.fields.landingpage_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="rules">{{ trans('cruds.offer.fields.rules') }}</label>
                <textarea class="form-control {{ $errors->has('rules') ? 'is-invalid' : '' }}" name="rules" id="rules">{{ old('rules', $offer->rules) }}</textarea>
                @if($errors->has('rules'))
                    <span class="text-danger">{{ $errors->first('rules') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.offer.fields.rules_helper') }}</span>
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