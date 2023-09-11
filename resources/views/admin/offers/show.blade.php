@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.offer.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.offers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.offer.fields.id') }}
                        </th>
                        <td>
                            {{ $offer->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.offer.fields.shop') }}
                        </th>
                        <td>
                            {{ $offer->shop->url ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.offer.fields.title') }}
                        </th>
                        <td>
                            {{ $offer->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.offer.fields.description') }}
                        </th>
                        <td>
                            {{ $offer->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.offer.fields.value') }}
                        </th>
                        <td>
                            {{ $offer->value }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.offer.fields.until') }}
                        </th>
                        <td>
                            {{ $offer->until }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.offer.fields.landingpage') }}
                        </th>
                        <td>
                            {{ $offer->landingpage }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.offer.fields.rules') }}
                        </th>
                        <td>
                            {{ $offer->rules }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.offers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection