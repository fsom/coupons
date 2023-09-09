@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.brand.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.brands.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.brand.fields.id') }}
                        </th>
                        <td>
                            {{ $brand->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.brand.fields.name') }}
                        </th>
                        <td>
                            {{ $brand->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.brand.fields.title') }}
                        </th>
                        <td>
                            {{ $brand->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.brand.fields.description') }}
                        </th>
                        <td>
                            {{ $brand->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.brand.fields.image') }}
                        </th>
                        <td>
                            @if($brand->image)
                                <a href="{{ $brand->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $brand->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.brand.fields.content') }}
                        </th>
                        <td>
                            {!! $brand->content !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.brands.index') }}">
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
            <a class="nav-link" href="#brand_products" role="tab" data-toggle="tab">
                {{ trans('cruds.product.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#brand_deals" role="tab" data-toggle="tab">
                {{ trans('cruds.deal.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#brand_offers" role="tab" data-toggle="tab">
                {{ trans('cruds.offer.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="brand_products">
            @includeIf('admin.brands.relationships.brandProducts', ['products' => $brand->brandProducts])
        </div>
        <div class="tab-pane" role="tabpanel" id="brand_deals">
            @includeIf('admin.brands.relationships.brandDeals', ['deals' => $brand->brandDeals])
        </div>
        <div class="tab-pane" role="tabpanel" id="brand_offers">
            @includeIf('admin.brands.relationships.brandOffers', ['offers' => $brand->brandOffers])
        </div>
    </div>
</div>

@endsection