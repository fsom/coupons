@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.tag.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.tags.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.tag.fields.id') }}
                        </th>
                        <td>
                            {{ $tag->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tag.fields.name') }}
                        </th>
                        <td>
                            {{ $tag->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tag.fields.title') }}
                        </th>
                        <td>
                            {{ $tag->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tag.fields.description') }}
                        </th>
                        <td>
                            {{ $tag->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tag.fields.image') }}
                        </th>
                        <td>
                            @if($tag->image)
                                <a href="{{ $tag->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $tag->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.tags.index') }}">
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
            <a class="nav-link" href="#tags_coupons" role="tab" data-toggle="tab">
                {{ trans('cruds.coupon.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#tags_deals" role="tab" data-toggle="tab">
                {{ trans('cruds.deal.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#tags_offers" role="tab" data-toggle="tab">
                {{ trans('cruds.offer.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="tags_coupons">
            @includeIf('admin.tags.relationships.tagsCoupons', ['coupons' => $tag->tagsCoupons])
        </div>
        <div class="tab-pane" role="tabpanel" id="tags_deals">
            @includeIf('admin.tags.relationships.tagsDeals', ['deals' => $tag->tagsDeals])
        </div>
        <div class="tab-pane" role="tabpanel" id="tags_offers">
            @includeIf('admin.tags.relationships.tagsOffers', ['offers' => $tag->tagsOffers])
        </div>
    </div>
</div>

@endsection