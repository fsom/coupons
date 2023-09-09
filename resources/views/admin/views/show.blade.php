@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.view.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.views.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.view.fields.id') }}
                        </th>
                        <td>
                            {{ $view->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.view.fields.uuid') }}
                        </th>
                        <td>
                            {{ $view->uuid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.view.fields.landingpage') }}
                        </th>
                        <td>
                            {{ $view->landingpage }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.view.fields.utm_source') }}
                        </th>
                        <td>
                            {{ $view->utm_source }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.view.fields.utm_medium') }}
                        </th>
                        <td>
                            {{ $view->utm_medium }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.view.fields.utm_campaign') }}
                        </th>
                        <td>
                            {{ $view->utm_campaign }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.views.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection