<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyClickRequest;
use App\Http\Requests\StoreClickRequest;
use App\Http\Requests\UpdateClickRequest;
use App\Models\Click;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ClickController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('click_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Click::with(['team'])->select(sprintf('%s.*', (new Click)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'click_show';
                $editGate      = 'click_edit';
                $deleteGate    = 'click_delete';
                $crudRoutePart = 'clicks';

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
            $table->editColumn('uuid', function ($row) {
                return $row->uuid ? $row->uuid : '';
            });
            $table->editColumn('landingpage', function ($row) {
                return $row->landingpage ? $row->landingpage : '';
            });
            $table->editColumn('utm_source', function ($row) {
                return $row->utm_source ? $row->utm_source : '';
            });
            $table->editColumn('utm_medium', function ($row) {
                return $row->utm_medium ? $row->utm_medium : '';
            });
            $table->editColumn('utm_campaign', function ($row) {
                return $row->utm_campaign ? $row->utm_campaign : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.clicks.index');
    }

    public function create()
    {
        abort_if(Gate::denies('click_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.clicks.create');
    }

    public function store(StoreClickRequest $request)
    {
        $click = Click::create($request->all());

        return redirect()->route('admin.clicks.index');
    }

    public function edit(Click $click)
    {
        abort_if(Gate::denies('click_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $click->load('team');

        return view('admin.clicks.edit', compact('click'));
    }

    public function update(UpdateClickRequest $request, Click $click)
    {
        $click->update($request->all());

        return redirect()->route('admin.clicks.index');
    }

    public function show(Click $click)
    {
        abort_if(Gate::denies('click_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $click->load('team');

        return view('admin.clicks.show', compact('click'));
    }

    public function destroy(Click $click)
    {
        abort_if(Gate::denies('click_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $click->delete();

        return back();
    }

    public function massDestroy(MassDestroyClickRequest $request)
    {
        $clicks = Click::find(request('ids'));

        foreach ($clicks as $click) {
            $click->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
