<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDealRequest;
use App\Http\Requests\StoreDealRequest;
use App\Http\Requests\UpdateDealRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Deal;
use App\Models\Product;
use App\Models\Shop;
use App\Models\Tag;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class DealController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('deal_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Deal::with(['shop', 'brand', 'product', 'category', 'tags', 'created_by'])->select(sprintf('%s.*', (new Deal)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'deal_show';
                $editGate      = 'deal_edit';
                $deleteGate    = 'deal_delete';
                $crudRoutePart = 'deals';

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

        return view('admin.deals.index');
    }

    public function create()
    {
        abort_if(Gate::denies('deal_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $shops = Shop::pluck('domain', 'id')->prepend(trans('global.pleaseSelect'), '');

        $brands = Brand::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $products = Product::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tags = Tag::pluck('name', 'id');

        return view('admin.deals.create', compact('brands', 'categories', 'products', 'shops', 'tags'));
    }

    public function store(StoreDealRequest $request)
    {
        $deal = Deal::create($request->all());
        $deal->tags()->sync($request->input('tags', []));

        return redirect()->route('admin.deals.index');
    }

    public function edit(Deal $deal)
    {
        abort_if(Gate::denies('deal_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $shops = Shop::pluck('domain', 'id')->prepend(trans('global.pleaseSelect'), '');

        $brands = Brand::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $products = Product::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tags = Tag::pluck('name', 'id');

        $deal->load('shop', 'brand', 'product', 'category', 'tags', 'created_by');

        return view('admin.deals.edit', compact('brands', 'categories', 'deal', 'products', 'shops', 'tags'));
    }

    public function update(UpdateDealRequest $request, Deal $deal)
    {
        $deal->update($request->all());
        $deal->tags()->sync($request->input('tags', []));

        return redirect()->route('admin.deals.index');
    }

    public function show(Deal $deal)
    {
        abort_if(Gate::denies('deal_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $deal->load('shop', 'brand', 'product', 'category', 'tags', 'created_by');

        return view('admin.deals.show', compact('deal'));
    }

    public function destroy(Deal $deal)
    {
        abort_if(Gate::denies('deal_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $deal->delete();

        return back();
    }

    public function massDestroy(MassDestroyDealRequest $request)
    {
        $deals = Deal::find(request('ids'));

        foreach ($deals as $deal) {
            $deal->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
