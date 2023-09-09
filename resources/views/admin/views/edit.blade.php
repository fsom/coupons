@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.view.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.views.update", [$view->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="uuid">{{ trans('cruds.view.fields.uuid') }}</label>
                <input class="form-control {{ $errors->has('uuid') ? 'is-invalid' : '' }}" type="text" name="uuid" id="uuid" value="{{ old('uuid', $view->uuid) }}">
                @if($errors->has('uuid'))
                    <span class="text-danger">{{ $errors->first('uuid') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.view.fields.uuid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="landingpage">{{ trans('cruds.view.fields.landingpage') }}</label>
                <input class="form-control {{ $errors->has('landingpage') ? 'is-invalid' : '' }}" type="text" name="landingpage" id="landingpage" value="{{ old('landingpage', $view->landingpage) }}">
                @if($errors->has('landingpage'))
                    <span class="text-danger">{{ $errors->first('landingpage') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.view.fields.landingpage_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="utm_source">{{ trans('cruds.view.fields.utm_source') }}</label>
                <input class="form-control {{ $errors->has('utm_source') ? 'is-invalid' : '' }}" type="text" name="utm_source" id="utm_source" value="{{ old('utm_source', $view->utm_source) }}">
                @if($errors->has('utm_source'))
                    <span class="text-danger">{{ $errors->first('utm_source') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.view.fields.utm_source_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="utm_medium">{{ trans('cruds.view.fields.utm_medium') }}</label>
                <input class="form-control {{ $errors->has('utm_medium') ? 'is-invalid' : '' }}" type="text" name="utm_medium" id="utm_medium" value="{{ old('utm_medium', $view->utm_medium) }}">
                @if($errors->has('utm_medium'))
                    <span class="text-danger">{{ $errors->first('utm_medium') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.view.fields.utm_medium_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="utm_campaign">{{ trans('cruds.view.fields.utm_campaign') }}</label>
                <input class="form-control {{ $errors->has('utm_campaign') ? 'is-invalid' : '' }}" type="text" name="utm_campaign" id="utm_campaign" value="{{ old('utm_campaign', $view->utm_campaign) }}">
                @if($errors->has('utm_campaign'))
                    <span class="text-danger">{{ $errors->first('utm_campaign') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.view.fields.utm_campaign_helper') }}</span>
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