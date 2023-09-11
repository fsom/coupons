<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyAdRequest;
use App\Http\Requests\StoreAdRequest;
use App\Http\Requests\UpdateAdRequest;
use App\Models\Ad;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AdController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('ad_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Ad::with(['team'])->select(sprintf('%s.*', (new Ad)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'ad_show';
                $editGate      = 'ad_edit';
                $deleteGate    = 'ad_delete';
                $crudRoutePart = 'ads';

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
            $table->editColumn('space', function ($row) {
                return $row->space ? $row->space : '';
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

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.ads.index');
    }

    public function create()
    {
        abort_if(Gate::denies('ad_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ads.create');
    }

    public function store(StoreAdRequest $request)
    {
        $ad = Ad::create($request->all());

        return redirect()->route('admin.ads.index');
    }

    public function edit(Ad $ad)
    {
        abort_if(Gate::denies('ad_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ad->load('team');

        return view('admin.ads.edit', compact('ad'));
    }

    public function update(UpdateAdRequest $request, Ad $ad)
    {
        $ad->update($request->all());

        return redirect()->route('admin.ads.index');
    }

    public function show(Ad $ad)
    {
        abort_if(Gate::denies('ad_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ad->load('team');

        return view('admin.ads.show', compact('ad'));
    }

    public function destroy(Ad $ad)
    {
        abort_if(Gate::denies('ad_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ad->delete();

        return back();
    }

    public function massDestroy(MassDestroyAdRequest $request)
    {
        $ads = Ad::find(request('ids'));

        foreach ($ads as $ad) {
            $ad->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
