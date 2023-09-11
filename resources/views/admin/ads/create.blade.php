@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.ad.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.ads.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="space">{{ trans('cruds.ad.fields.space') }}</label>
                <input class="form-control {{ $errors->has('space') ? 'is-invalid' : '' }}" type="text" name="space" id="space" value="{{ old('space', '') }}" required>
                @if($errors->has('space'))
                    <span class="text-danger">{{ $errors->first('space') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.ad.fields.space_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.ad.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.ad.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="description">{{ trans('cruds.ad.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', '') }}" required>
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.ad.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="value">{{ trans('cruds.ad.fields.value') }}</label>
                <input class="form-control {{ $errors->has('value') ? 'is-invalid' : '' }}" type="text" name="value" id="value" value="{{ old('value', '') }}" required>
                @if($errors->has('value'))
                    <span class="text-danger">{{ $errors->first('value') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.ad.fields.value_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="until">{{ trans('cruds.ad.fields.until') }}</label>
                <input class="form-control date {{ $errors->has('until') ? 'is-invalid' : '' }}" type="text" name="until" id="until" value="{{ old('until') }}" required>
                @if($errors->has('until'))
                    <span class="text-danger">{{ $errors->first('until') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.ad.fields.until_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="landingpage">{{ trans('cruds.ad.fields.landingpage') }}</label>
                <input class="form-control {{ $errors->has('landingpage') ? 'is-invalid' : '' }}" type="text" name="landingpage" id="landingpage" value="{{ old('landingpage', '') }}" required>
                @if($errors->has('landingpage'))
                    <span class="text-danger">{{ $errors->first('landingpage') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.ad.fields.landingpage_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="rules">{{ trans('cruds.ad.fields.rules') }}</label>
                <textarea class="form-control {{ $errors->has('rules') ? 'is-invalid' : '' }}" name="rules" id="rules">{{ old('rules') }}</textarea>
                @if($errors->has('rules'))
                    <span class="text-danger">{{ $errors->first('rules') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.ad.fields.rules_helper') }}</span>
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