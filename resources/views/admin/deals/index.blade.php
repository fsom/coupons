@extends('layouts.admin')
@section('content')
@can('deal_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.deals.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.deal.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Deal', 'route' => 'admin.deals.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.deal.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Deal">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.deal.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.deal.fields.shop') }}
                    </th>
                    <th>
                        {{ trans('cruds.deal.fields.title') }}
                    </th>
                    <th>
                        {{ trans('cruds.deal.fields.description') }}
                    </th>
                    <th>
                        {{ trans('cruds.deal.fields.value') }}
                    </th>
                    <th>
                        {{ trans('cruds.deal.fields.until') }}
                    </th>
                    <th>
                        {{ trans('cruds.deal.fields.landingpage') }}
                    </th>
                    <th>
                        {{ trans('cruds.deal.fields.brand') }}
                    </th>
                    <th>
                        {{ trans('cruds.deal.fields.product') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('deal_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.deals.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.deals.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'shop_url', name: 'shop.url' },
{ data: 'title', name: 'title' },
{ data: 'description', name: 'description' },
{ data: 'value', name: 'value' },
{ data: 'until', name: 'until' },
{ data: 'landingpage', name: 'landingpage' },
{ data: 'brand_name', name: 'brand.name' },
{ data: 'product_name', name: 'product.name' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-Deal').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection