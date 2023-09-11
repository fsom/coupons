<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyViewRequest;
use App\Http\Requests\StoreViewRequest;
use App\Http\Requests\UpdateViewRequest;
use App\Models\View;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ViewController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('view_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = View::with(['team'])->select(sprintf('%s.*', (new View)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'view_show';
                $editGate      = 'view_edit';
                $deleteGate    = 'view_delete';
                $crudRoutePart = 'views';

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

        return view('admin.views.index');
    }

    public function create()
    {
        abort_if(Gate::denies('view_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.views.create');
    }

    public function store(StoreViewRequest $request)
    {
        $view = View::create($request->all());

        return redirect()->route('admin.views.index');
    }

    public function edit(View $view)
    {
        abort_if(Gate::denies('view_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $view->load('team');

        return view('admin.views.edit', compact('view'));
    }

    public function update(UpdateViewRequest $request, View $view)
    {
        $view->update($request->all());

        return redirect()->route('admin.views.index');
    }

    public function show(View $view)
    {
        abort_if(Gate::denies('view_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $view->load('team');

        return view('admin.views.show', compact('view'));
    }

    public function destroy(View $view)
    {
        abort_if(Gate::denies('view_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $view->delete();

        return back();
    }

    public function massDestroy(MassDestroyViewRequest $request)
    {
        $views = View::find(request('ids'));

        foreach ($views as $view) {
            $view->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
