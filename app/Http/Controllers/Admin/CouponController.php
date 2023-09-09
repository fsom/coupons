<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCouponRequest;
use App\Http\Requests\StoreCouponRequest;
use App\Http\Requests\UpdateCouponRequest;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Shop;
use App\Models\Tag;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class CouponController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('coupon_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Coupon::with(['shop', 'category', 'tags', 'created_by'])->select(sprintf('%s.*', (new Coupon)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'coupon_show';
                $editGate      = 'coupon_edit';
                $deleteGate    = 'coupon_delete';
                $crudRoutePart = 'coupons';

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
            $table->editColumn('code', function ($row) {
                return $row->code ? $row->code : '';
            });
            $table->editColumn('value', function ($row) {
                return $row->value ? $row->value : '';
            });

            $table->editColumn('landingpage', function ($row) {
                return $row->landingpage ? $row->landingpage : '';
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'shop']);

            return $table->make(true);
        }

        return view('admin.coupons.index');
    }

    public function create()
    {
        abort_if(Gate::denies('coupon_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $shops = Shop::pluck('domain', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tags = Tag::pluck('name', 'id');

        return view('admin.coupons.create', compact('categories', 'shops', 'tags'));
    }

    public function store(StoreCouponRequest $request)
    {
        $coupon = Coupon::create($request->all());
        $coupon->tags()->sync($request->input('tags', []));

        return redirect()->route('admin.coupons.index');
    }

    public function edit(Coupon $coupon)
    {
        abort_if(Gate::denies('coupon_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $shops = Shop::pluck('domain', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tags = Tag::pluck('name', 'id');

        $coupon->load('shop', 'category', 'tags', 'created_by');

        return view('admin.coupons.edit', compact('categories', 'coupon', 'shops', 'tags'));
    }

    public function update(UpdateCouponRequest $request, Coupon $coupon)
    {
        $coupon->update($request->all());
        $coupon->tags()->sync($request->input('tags', []));

        return redirect()->route('admin.coupons.index');
    }

    public function show(Coupon $coupon)
    {
        abort_if(Gate::denies('coupon_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $coupon->load('shop', 'category', 'tags', 'created_by');

        return view('admin.coupons.show', compact('coupon'));
    }

    public function destroy(Coupon $coupon)
    {
        abort_if(Gate::denies('coupon_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $coupon->delete();

        return back();
    }

    public function massDestroy(MassDestroyCouponRequest $request)
    {
        $coupons = Coupon::find(request('ids'));

        foreach ($coupons as $coupon) {
            $coupon->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
