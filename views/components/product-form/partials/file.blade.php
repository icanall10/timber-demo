<div class="file">
    <div class="flex flex-left flex-nowrap">
        <div class="img">
            @if ($path = data_get($item, 'path'))

                @if (helpers()->isImage($path))
                    <img src="{{ thumb($path, 'product-form-image') }}" alt="">
                @endif

                @if (helpers()->isDoc($path))
                    {!! icon('doc') !!}
                @endif

                @if (helpers()->isExcel($path))
                    {!! icon('excel') !!}
                @endif

                @if (helpers()->isPdf($path))
                    {!! icon('pdf') !!}
                @endif

            @endif
        </div>
        <div class="name">{{ data_get($item, 'name') ?: __('site.product-form.without-name') }}</div>
        <div class="delete">
            <a href="#" class="button extra-small">{{ __('site.product-form.delete') }}</a>
        </div>
    </div>

    @if ($id = data_get($item, 'id'))
        {{ Form::hidden("files_data[$key][id]", $id) }}
    @else
        {{ Form::hidden("files_data[$key][name]", $item['name']) }}
        {{ Form::hidden("files_data[$key][filename]", $item['filename']) }}
    @endif
</div>