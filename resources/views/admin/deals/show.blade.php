@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.deal.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.deals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.deal.fields.id') }}
                        </th>
                        <td>
                            {{ $deal->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.deal.fields.shop') }}
                        </th>
                        <td>
                            {{ $deal->shop->domain ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.deal.fields.title') }}
                        </th>
                        <td>
                            {{ $deal->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.deal.fields.description') }}
                        </th>
                        <td>
                            {{ $deal->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.deal.fields.value') }}
                        </th>
                        <td>
                            {{ $deal->value }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.deal.fields.until') }}
                        </th>
                        <td>
                            {{ $deal->until }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.deal.fields.landingpage') }}
                        </th>
                        <td>
                            {{ $deal->landingpage }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.deal.fields.rules') }}
                        </th>
                        <td>
                            {{ $deal->rules }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.deal.fields.brand') }}
                        </th>
                        <td>
                            {{ $deal->brand->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.deal.fields.product') }}
                        </th>
                        <td>
                            {{ $deal->product->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.deal.fields.category') }}
                        </th>
                        <td>
                            {{ $deal->category->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.deal.fields.tags') }}
                        </th>
                        <td>
                            @foreach($deal->tags as $key => $tags)
                                <span class="label label-info">{{ $tags->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.deals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection