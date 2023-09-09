@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.comment.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.comments.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="shop_id">{{ trans('cruds.comment.fields.shop') }}</label>
                <select class="form-control select2 {{ $errors->has('shop') ? 'is-invalid' : '' }}" name="shop_id" id="shop_id" required>
                    @foreach($shops as $id => $entry)
                        <option value="{{ $id }}" {{ old('shop_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('shop'))
                    <span class="text-danger">{{ $errors->first('shop') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.shop_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.comment.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.comment.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required>
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.comment.fields.stars') }}</label>
                <select class="form-control {{ $errors->has('stars') ? 'is-invalid' : '' }}" name="stars" id="stars" required>
                    <option value disabled {{ old('stars', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Comment::STARS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('stars', '5') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('stars'))
                    <span class="text-danger">{{ $errors->first('stars') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.stars_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ip">{{ trans('cruds.comment.fields.ip') }}</label>
                <input class="form-control {{ $errors->has('ip') ? 'is-invalid' : '' }}" type="text" name="ip" id="ip" value="{{ old('ip', '') }}">
                @if($errors->has('ip'))
                    <span class="text-danger">{{ $errors->first('ip') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.ip_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="data">{{ trans('cruds.comment.fields.data') }}</label>
                <textarea class="form-control {{ $errors->has('data') ? 'is-invalid' : '' }}" name="data" id="data">{{ old('data') }}</textarea>
                @if($errors->has('data'))
                    <span class="text-danger">{{ $errors->first('data') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.data_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="comment">{{ trans('cruds.comment.fields.comment') }}</label>
                <textarea class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }}" name="comment" id="comment">{{ old('comment') }}</textarea>
                @if($errors->has('comment'))
                    <span class="text-danger">{{ $errors->first('comment') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.comment_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="answer">{{ trans('cruds.comment.fields.answer') }}</label>
                <textarea class="form-control {{ $errors->has('answer') ? 'is-invalid' : '' }}" name="answer" id="answer">{{ old('answer') }}</textarea>
                @if($errors->has('answer'))
                    <span class="text-danger">{{ $errors->first('answer') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.answer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="answer_at">{{ trans('cruds.comment.fields.answer_at') }}</label>
                <input class="form-control datetime {{ $errors->has('answer_at') ? 'is-invalid' : '' }}" type="text" name="answer_at" id="answer_at" value="{{ old('answer_at') }}">
                @if($errors->has('answer_at'))
                    <span class="text-danger">{{ $errors->first('answer_at') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.answer_at_helper') }}</span>
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