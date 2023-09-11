@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.ad.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.ads.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.ad.fields.id') }}
                        </th>
                        <td>
                            {{ $ad->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ad.fields.space') }}
                        </th>
                        <td>
                            {{ $ad->space }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ad.fields.title') }}
                        </th>
                        <td>
                            {{ $ad->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ad.fields.description') }}
                        </th>
                        <td>
                            {{ $ad->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ad.fields.value') }}
                        </th>
                        <td>
                            {{ $ad->value }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ad.fields.until') }}
                        </th>
                        <td>
                            {{ $ad->until }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ad.fields.landingpage') }}
                        </th>
                        <td>
                            {{ $ad->landingpage }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ad.fields.rules') }}
                        </th>
                        <td>
                            {{ $ad->rules }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.ads.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection