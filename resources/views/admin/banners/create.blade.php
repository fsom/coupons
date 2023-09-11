@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.banner.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.banners.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="space">{{ trans('cruds.banner.fields.space') }}</label>
                <input class="form-control {{ $errors->has('space') ? 'is-invalid' : '' }}" type="text" name="space" id="space" value="{{ old('space', '') }}" required>
                @if($errors->has('space'))
                    <span class="text-danger">{{ $errors->first('space') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.banner.fields.space_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="soucecode">{{ trans('cruds.banner.fields.soucecode') }}</label>
                <textarea class="form-control {{ $errors->has('soucecode') ? 'is-invalid' : '' }}" name="soucecode" id="soucecode">{{ old('soucecode') }}</textarea>
                @if($errors->has('soucecode'))
                    <span class="text-danger">{{ $errors->first('soucecode') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.banner.fields.soucecode_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="views">{{ trans('cruds.banner.fields.views') }}</label>
                <input class="form-control {{ $errors->has('views') ? 'is-invalid' : '' }}" type="number" name="views" id="views" value="{{ old('views', '') }}" step="1">
                @if($errors->has('views'))
                    <span class="text-danger">{{ $errors->first('views') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.banner.fields.views_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="clicks">{{ trans('cruds.banner.fields.clicks') }}</label>
                <input class="form-control {{ $errors->has('clicks') ? 'is-invalid' : '' }}" type="number" name="clicks" id="clicks" value="{{ old('clicks', '') }}" step="1">
                @if($errors->has('clicks'))
                    <span class="text-danger">{{ $errors->first('clicks') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.banner.fields.clicks_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cpc">{{ trans('cruds.banner.fields.cpc') }}</label>
                <input class="form-control {{ $errors->has('cpc') ? 'is-invalid' : '' }}" type="number" name="cpc" id="cpc" value="{{ old('cpc', '') }}" step="0.01">
                @if($errors->has('cpc'))
                    <span class="text-danger">{{ $errors->first('cpc') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.banner.fields.cpc_helper') }}</span>
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