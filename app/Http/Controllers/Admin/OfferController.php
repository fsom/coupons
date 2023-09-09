<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyOfferRequest;
use App\Http\Requests\StoreOfferRequest;
use App\Http\Requests\UpdateOfferRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Shop;
use App\Models\Tag;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class OfferController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('offer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Offer::with(['shop', 'brand', 'product', 'category', 'tags', 'created_by'])->select(sprintf('%s.*', (new Offer)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'offer_show';
                $editGate      = 'offer_edit';
                $deleteGate    = 'offer_delete';
                $crudRoutePart = 'offers';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->addColumn('shop_domain', function ($row) {
                return $row->shop ? $row->shop->domain : '';
            });

            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : '';
            });
            $table->editColumn('value', function ($row) {
                return $row->value ? $row->value : '';
            });

            $table->editColumn('landingpage', function ($row) {
                return $row->landingpage ? $row->landingpage : '';
            });
            $table->addColumn('brand_name', function ($row) {
                return $row->brand ? $row->brand->name : '';
            });

            $table->addColumn('product_name', function ($row) {
                return $row->product ? $row->product->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'shop', 'brand', 'product']);

            return $table->make(true);
        }

        return view('admin.offers.index');
    }

    public function create()
    {
        abort_if(Gate::denies('offer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $shops = Shop::pluck('domain', 'id')->prepend(trans('global.pleaseSelect'), '');

        $brands = Brand::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $products = Product::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tags = Tag::pluck('name', 'id');

        return view('admin.offers.create', compact('brands', 'categories', 'products', 'shops', 'tags'));
    }

    public function store(StoreOfferRequest $request)
    {
        $offer = Offer::create($request->all());
        $offer->tags()->sync($request->input('tags', []));

        return redirect()->route('admin.offers.index');
    }

    public function edit(Offer $offer)
    {
        abort_if(Gate::denies('offer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $shops = Shop::pluck('domain', 'id')->prepend(trans('global.pleaseSelect'), '');

        $brands = Brand::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $products = Product::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tags = Tag::pluck('name', 'id');

        $offer->load('shop', 'brand', 'product', 'category', 'tags', 'created_by');

        return view('admin.offers.edit', compact('brands', 'categories', 'offer', 'products', 'shops', 'tags'));
    }

    public function update(UpdateOfferRequest $request, Offer $offer)
    {
        $offer->update($request->all());
        $offer->tags()->sync($request->input('tags', []));

        return redirect()->route('admin.offers.index');
    }

    public function show(Offer $offer)
    {
        abort_if(Gate::denies('offer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $offer->load('shop', 'brand', 'product', 'category', 'tags', 'created_by');

        return view('admin.offers.show', compact('offer'));
    }

    public function destroy(Offer $offer)
    {
        abort_if(Gate::denies('offer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $offer->delete();

        return back();
    }

    public function massDestroy(MassDestroyOfferRequest $request)
    {
        $offers = Offer::find(request('ids'));

        foreach ($offers as $offer) {
            $offer->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
