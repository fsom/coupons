@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.category.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.id') }}
                        </th>
                        <td>
                            {{ $category->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.name') }}
                        </th>
                        <td>
                            {{ $category->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.title') }}
                        </th>
                        <td>
                            {{ $category->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.description') }}
                        </th>
                        <td>
                            {{ $category->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.image') }}
                        </th>
                        <td>
                            @if($category->image)
                                <a href="{{ $category->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $category->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#category_coupons" role="tab" data-toggle="tab">
                {{ trans('cruds.coupon.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#category_deals" role="tab" data-toggle="tab">
                {{ trans('cruds.deal.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#category_offers" role="tab" data-toggle="tab">
                {{ trans('cruds.offer.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="category_coupons">
            @includeIf('admin.categories.relationships.categoryCoupons', ['coupons' => $category->categoryCoupons])
        </div>
        <div class="tab-pane" role="tabpanel" id="category_deals">
            @includeIf('admin.categories.relationships.categoryDeals', ['deals' => $category->categoryDeals])
        </div>
        <div class="tab-pane" role="tabpanel" id="category_offers">
            @includeIf('admin.categories.relationships.categoryOffers', ['offers' => $category->categoryOffers])
        </div>
    </div>
</div>

@endsection