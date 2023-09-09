@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.click.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.clicks.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.click.fields.id') }}
                        </th>
                        <td>
                            {{ $click->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.click.fields.uuid') }}
                        </th>
                        <td>
                            {{ $click->uuid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.click.fields.landingpage') }}
                        </th>
                        <td>
                            {{ $click->landingpage }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.click.fields.utm_source') }}
                        </th>
                        <td>
                            {{ $click->utm_source }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.click.fields.utm_medium') }}
                        </th>
                        <td>
                            {{ $click->utm_medium }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.click.fields.utm_campaign') }}
                        </th>
                        <td>
                            {{ $click->utm_campaign }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.clicks.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection