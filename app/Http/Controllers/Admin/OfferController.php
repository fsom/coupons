<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyOfferRequest;
use App\Http\Requests\StoreOfferRequest;
use App\Http\Requests\UpdateOfferRequest;
use App\Models\Offer;
use App\Models\Shop;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class OfferController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('offer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Offer::with(['shop', 'team'])->select(sprintf('%s.*', (new Offer)->table));
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
            $table->addColumn('shop_url', function ($row) {
                return $row->shop ? $row->shop->url : '';
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

            $table->rawColumns(['actions', 'placeholder', 'shop']);

            return $table->make(true);
        }

        return view('admin.offers.index');
    }

    public function create()
    {
        abort_if(Gate::denies('offer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $shops = Shop::pluck('url', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.offers.create', compact('shops'));
    }

    public function store(StoreOfferRequest $request)
    {
        $offer = Offer::create($request->all());

        return redirect()->route('admin.offers.index');
    }

    public function edit(Offer $offer)
    {
        abort_if(Gate::denies('offer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $shops = Shop::pluck('url', 'id')->prepend(trans('global.pleaseSelect'), '');

        $offer->load('shop', 'team');

        return view('admin.offers.edit', compact('offer', 'shops'));
    }

    public function update(UpdateOfferRequest $request, Offer $offer)
    {
        $offer->update($request->all());

        return redirect()->route('admin.offers.index');
    }

    public function show(Offer $offer)
    {
        abort_if(Gate::denies('offer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $offer->load('shop', 'team');

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
