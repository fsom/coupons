@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.shop.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.shops.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required">{{ trans('cruds.shop.fields.region') }}</label>
                <select class="form-control {{ $errors->has('region') ? 'is-invalid' : '' }}" name="region" id="region" required>
                    <option value disabled {{ old('region', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Shop::REGION_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('region', 'en') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('region'))
                    <span class="text-danger">{{ $errors->first('region') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.region_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="domain">{{ trans('cruds.shop.fields.domain') }}</label>
                <input class="form-control {{ $errors->has('domain') ? 'is-invalid' : '' }}" type="text" name="domain" id="domain" value="{{ old('domain', '') }}">
                @if($errors->has('domain'))
                    <span class="text-danger">{{ $errors->first('domain') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.domain_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="url">{{ trans('cruds.shop.fields.url') }}</label>
                <input class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" type="text" name="url" id="url" value="{{ old('url', '') }}" required>
                @if($errors->has('url'))
                    <span class="text-danger">{{ $errors->first('url') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.shop.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="titel">{{ trans('cruds.shop.fields.titel') }}</label>
                <input class="form-control {{ $errors->has('titel') ? 'is-invalid' : '' }}" type="text" name="titel" id="titel" value="{{ old('titel', '') }}">
                @if($errors->has('titel'))
                    <span class="text-danger">{{ $errors->first('titel') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.titel_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.shop.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', '') }}">
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="content">{{ trans('cruds.shop.fields.content') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content" id="content">{!! old('content') !!}</textarea>
                @if($errors->has('content'))
                    <span class="text-danger">{{ $errors->first('content') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.content_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="what">{{ trans('cruds.shop.fields.what') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('what') ? 'is-invalid' : '' }}" name="what" id="what">{!! old('what') !!}</textarea>
                @if($errors->has('what'))
                    <span class="text-danger">{{ $errors->first('what') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.what_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="save">{{ trans('cruds.shop.fields.save') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('save') ? 'is-invalid' : '' }}" name="save" id="save">{!! old('save') !!}</textarea>
                @if($errors->has('save'))
                    <span class="text-danger">{{ $errors->first('save') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.save_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="about">{{ trans('cruds.shop.fields.about') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('about') ? 'is-invalid' : '' }}" name="about" id="about">{!! old('about') !!}</textarea>
                @if($errors->has('about'))
                    <span class="text-danger">{{ $errors->first('about') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.about_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="offerspage">{{ trans('cruds.shop.fields.offerspage') }}</label>
                <input class="form-control {{ $errors->has('offerspage') ? 'is-invalid' : '' }}" type="text" name="offerspage" id="offerspage" value="{{ old('offerspage', '') }}">
                @if($errors->has('offerspage'))
                    <span class="text-danger">{{ $errors->first('offerspage') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.offerspage_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contactpage">{{ trans('cruds.shop.fields.contactpage') }}</label>
                <input class="form-control {{ $errors->has('contactpage') ? 'is-invalid' : '' }}" type="text" name="contactpage" id="contactpage" value="{{ old('contactpage', '') }}">
                @if($errors->has('contactpage'))
                    <span class="text-danger">{{ $errors->first('contactpage') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.contactpage_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="imprint">{{ trans('cruds.shop.fields.imprint') }}</label>
                <input class="form-control {{ $errors->has('imprint') ? 'is-invalid' : '' }}" type="text" name="imprint" id="imprint" value="{{ old('imprint', '') }}">
                @if($errors->has('imprint'))
                    <span class="text-danger">{{ $errors->first('imprint') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.imprint_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="adress">{{ trans('cruds.shop.fields.adress') }}</label>
                <input class="form-control {{ $errors->has('adress') ? 'is-invalid' : '' }}" type="text" name="adress" id="adress" value="{{ old('adress', '') }}">
                @if($errors->has('adress'))
                    <span class="text-danger">{{ $errors->first('adress') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.adress_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.shop.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}">
                @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="icon">{{ trans('cruds.shop.fields.icon') }}</label>
                <input class="form-control {{ $errors->has('icon') ? 'is-invalid' : '' }}" type="text" name="icon" id="icon" value="{{ old('icon', '') }}">
                @if($errors->has('icon'))
                    <span class="text-danger">{{ $errors->first('icon') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.icon_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="screenshot">{{ trans('cruds.shop.fields.screenshot') }}</label>
                <div class="needsclick dropzone {{ $errors->has('screenshot') ? 'is-invalid' : '' }}" id="screenshot-dropzone">
                </div>
                @if($errors->has('screenshot'))
                    <span class="text-danger">{{ $errors->first('screenshot') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.screenshot_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="logo">{{ trans('cruds.shop.fields.logo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}" id="logo-dropzone">
                </div>
                @if($errors->has('logo'))
                    <span class="text-danger">{{ $errors->first('logo') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.logo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="affiliate">{{ trans('cruds.shop.fields.affiliate') }}</label>
                <input class="form-control {{ $errors->has('affiliate') ? 'is-invalid' : '' }}" type="text" name="affiliate" id="affiliate" value="{{ old('affiliate', '') }}">
                @if($errors->has('affiliate'))
                    <span class="text-danger">{{ $errors->first('affiliate') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.affiliate_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('active') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="active" value="0">
                    <input class="form-check-input" type="checkbox" name="active" id="active" value="1" {{ old('active', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="active">{{ trans('cruds.shop.fields.active') }}</label>
                </div>
                @if($errors->has('active'))
                    <span class="text-danger">{{ $errors->first('active') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.active_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.shop.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}">
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="internal_links">{{ trans('cruds.shop.fields.internal_links') }}</label>
                <textarea class="form-control {{ $errors->has('internal_links') ? 'is-invalid' : '' }}" name="internal_links" id="internal_links">{{ old('internal_links') }}</textarea>
                @if($errors->has('internal_links'))
                    <span class="text-danger">{{ $errors->first('internal_links') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.internal_links_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="external_links">{{ trans('cruds.shop.fields.external_links') }}</label>
                <textarea class="form-control {{ $errors->has('external_links') ? 'is-invalid' : '' }}" name="external_links" id="external_links">{{ old('external_links') }}</textarea>
                @if($errors->has('external_links'))
                    <span class="text-danger">{{ $errors->first('external_links') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.external_links_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="header_redirect">{{ trans('cruds.shop.fields.header_redirect') }}</label>
                <input class="form-control {{ $errors->has('header_redirect') ? 'is-invalid' : '' }}" type="text" name="header_redirect" id="header_redirect" value="{{ old('header_redirect', '') }}">
                @if($errors->has('header_redirect'))
                    <span class="text-danger">{{ $errors->first('header_redirect') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.header_redirect_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ip">{{ trans('cruds.shop.fields.ip') }}</label>
                <input class="form-control {{ $errors->has('ip') ? 'is-invalid' : '' }}" type="text" name="ip" id="ip" value="{{ old('ip', '') }}">
                @if($errors->has('ip'))
                    <span class="text-danger">{{ $errors->first('ip') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.ip_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('https') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="https" value="0">
                    <input class="form-check-input" type="checkbox" name="https" id="https" value="1" {{ old('https', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="https">{{ trans('cruds.shop.fields.https') }}</label>
                </div>
                @if($errors->has('https'))
                    <span class="text-danger">{{ $errors->first('https') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.https_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="svol">{{ trans('cruds.shop.fields.svol') }}</label>
                <input class="form-control {{ $errors->has('svol') ? 'is-invalid' : '' }}" type="number" name="svol" id="svol" value="{{ old('svol', '') }}" step="1">
                @if($errors->has('svol'))
                    <span class="text-danger">{{ $errors->first('svol') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.svol_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="keywords">{{ trans('cruds.shop.fields.keywords') }}</label>
                <input class="form-control {{ $errors->has('keywords') ? 'is-invalid' : '' }}" type="text" name="keywords" id="keywords" value="{{ old('keywords', '') }}">
                @if($errors->has('keywords'))
                    <span class="text-danger">{{ $errors->first('keywords') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.keywords_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="catgories">{{ trans('cruds.shop.fields.catgories') }}</label>
                <textarea class="form-control {{ $errors->has('catgories') ? 'is-invalid' : '' }}" name="catgories" id="catgories">{{ old('catgories') }}</textarea>
                @if($errors->has('catgories'))
                    <span class="text-danger">{{ $errors->first('catgories') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.shop.fields.catgories_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.shops.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $shop->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
    Dropzone.options.screenshotDropzone = {
    url: '{{ route('admin.shops.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="screenshot"]').remove()
      $('form').append('<input type="hidden" name="screenshot" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="screenshot"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($shop) && $shop->screenshot)
      var file = {!! json_encode($shop->screenshot) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="screenshot" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
<script>
    Dropzone.options.logoDropzone = {
    url: '{{ route('admin.shops.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="logo"]').remove()
      $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($shop) && $shop->logo)
      var file = {!! json_encode($shop->logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
@endsection