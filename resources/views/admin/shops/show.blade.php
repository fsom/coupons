@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.shop.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.shops.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.id') }}
                        </th>
                        <td>
                            {{ $shop->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.region') }}
                        </th>
                        <td>
                            {{ App\Models\Shop::REGION_SELECT[$shop->region] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.domain') }}
                        </th>
                        <td>
                            {{ $shop->domain }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.titel') }}
                        </th>
                        <td>
                            {{ $shop->titel }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.description') }}
                        </th>
                        <td>
                            {{ $shop->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.offerspage') }}
                        </th>
                        <td>
                            {{ $shop->offerspage }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.contactpage') }}
                        </th>
                        <td>
                            {{ $shop->contactpage }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.imprint') }}
                        </th>
                        <td>
                            {{ $shop->imprint }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.adress') }}
                        </th>
                        <td>
                            {{ $shop->adress }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.phone') }}
                        </th>
                        <td>
                            {{ $shop->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.icon') }}
                        </th>
                        <td>
                            {{ $shop->icon }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.screenshot') }}
                        </th>
                        <td>
                            @if($shop->screenshot)
                                <a href="{{ $shop->screenshot->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $shop->screenshot->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.logo') }}
                        </th>
                        <td>
                            @if($shop->logo)
                                <a href="{{ $shop->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $shop->logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.affiliate') }}
                        </th>
                        <td>
                            {{ $shop->affiliate }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.facebook') }}
                        </th>
                        <td>
                            {{ $shop->facebook }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.twitter') }}
                        </th>
                        <td>
                            {{ $shop->twitter }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.instagram') }}
                        </th>
                        <td>
                            {{ $shop->instagram }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.linkedin') }}
                        </th>
                        <td>
                            {{ $shop->linkedin }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.youtube') }}
                        </th>
                        <td>
                            {{ $shop->youtube }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.tiktok') }}
                        </th>
                        <td>
                            {{ $shop->tiktok }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.active') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $shop->active ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.email') }}
                        </th>
                        <td>
                            {{ $shop->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.internal_links') }}
                        </th>
                        <td>
                            {{ $shop->internal_links }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.external_links') }}
                        </th>
                        <td>
                            {{ $shop->external_links }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.header_redirect') }}
                        </th>
                        <td>
                            {{ $shop->header_redirect }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.ip') }}
                        </th>
                        <td>
                            {{ $shop->ip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.shop.fields.https') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $shop->https ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.shops.index') }}">
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
            <a class="nav-link" href="#shop_coupons" role="tab" data-toggle="tab">
                {{ trans('cruds.coupon.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#shop_comments" role="tab" data-toggle="tab">
                {{ trans('cruds.comment.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#shop_deals" role="tab" data-toggle="tab">
                {{ trans('cruds.deal.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#shop_offers" role="tab" data-toggle="tab">
                {{ trans('cruds.offer.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="shop_coupons">
            @includeIf('admin.shops.relationships.shopCoupons', ['coupons' => $shop->shopCoupons])
        </div>
        <div class="tab-pane" role="tabpanel" id="shop_comments">
            @includeIf('admin.shops.relationships.shopComments', ['comments' => $shop->shopComments])
        </div>
        <div class="tab-pane" role="tabpanel" id="shop_deals">
            @includeIf('admin.shops.relationships.shopDeals', ['deals' => $shop->shopDeals])
        </div>
        <div class="tab-pane" role="tabpanel" id="shop_offers">
            @includeIf('admin.shops.relationships.shopOffers', ['offers' => $shop->shopOffers])
        </div>
    </div>
</div>

@endsection