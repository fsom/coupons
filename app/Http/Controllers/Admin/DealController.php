<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyDealRequest;
use App\Http\Requests\StoreDealRequest;
use App\Http\Requests\UpdateDealRequest;
use App\Models\Deal;
use App\Models\Shop;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class DealController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('deal_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Deal::with(['shop', 'team'])->select(sprintf('%s.*', (new Deal)->table));
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

        return view('admin.deals.index');
    }

    public function create()
    {
        abort_if(Gate::denies('deal_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $shops = Shop::pluck('url', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.deals.create', compact('shops'));
    }

    public function store(StoreDealRequest $request)
    {
        $deal = Deal::create($request->all());

        return redirect()->route('admin.deals.index');
    }

    public function edit(Deal $deal)
    {
        abort_if(Gate::denies('deal_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $shops = Shop::pluck('url', 'id')->prepend(trans('global.pleaseSelect'), '');

        $deal->load('shop', 'team');

        return view('admin.deals.edit', compact('deal', 'shops'));
    }

    public function update(UpdateDealRequest $request, Deal $deal)
    {
        $deal->update($request->all());

        return redirect()->route('admin.deals.index');
    }

    public function show(Deal $deal)
    {
        abort_if(Gate::denies('deal_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $deal->load('shop', 'team');

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
