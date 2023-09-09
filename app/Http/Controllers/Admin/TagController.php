<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyTagRequest;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Models\Tag;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class TagController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('tag_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Tag::query()->select(sprintf('%s.*', (new Tag)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'tag_show';
                $editGate      = 'tag_edit';
                $deleteGate    = 'tag_delete';
                $crudRoutePart = 'tags';

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
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : '';
            });
            $table->editColumn('image', function ($row) {
                if ($photo = $row->image) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });

            $table->rawColumns(['actions', 'placeholder', 'image']);

            return $table->make(true);
        }

        return view('admin.tags.index');
    }

    public function create()
    {
        abort_if(Gate::denies('tag_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tags.create');
    }

    public function store(StoreTagRequest $request)
    {
        $tag = Tag::create($request->all());

        if ($request->input('image', false)) {
            $tag->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $tag->id]);
        }

        return redirect()->route('admin.tags.index');
    }

    public function edit(Tag $tag)
    {
        abort_if(Gate::denies('tag_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tags.edit', compact('tag'));
    }

    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag->update($request->all());

        if ($request->input('image', false)) {
            if (! $tag->image || $request->input('image') !== $tag->image->file_name) {
                if ($tag->image) {
                    $tag->image->delete();
                }
                $tag->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($tag->image) {
            $tag->image->delete();
        }

        return redirect()->route('admin.tags.index');
    }

    public function show(Tag $tag)
    {
        abort_if(Gate::denies('tag_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tag->load('tagsCoupons', 'tagsDeals', 'tagsOffers');

        return view('admin.tags.show', compact('tag'));
    }

    public function destroy(Tag $tag)
    {
        abort_if(Gate::denies('tag_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tag->delete();

        return back();
    }

    public function massDestroy(MassDestroyTagRequest $request)
    {
        $tags = Tag::find(request('ids'));

        foreach ($tags as $tag) {
            $tag->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('tag_create') && Gate::denies('tag_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Tag();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
