<div class="form-group item-files">

    <div class="input-file" data-product-form-files-input>
        {!! $self->render('partials.files-input') !!}
    </div>

    <div class="flex">
        <a href="#" class="button upload small">
            {!! icon('doc-plus') !!}
            {{ __('site.product-form.choose-files') }}
        </a>
    </div>

    <div class="help">
        {!! clean(__('site.product-form.files-help')) !!}
    </div>

    <div class="list" data-product-form-files-list>
        @foreach($self->getFilesData() as $key => $item)
            {!! $self->render('partials.file', compact('item', 'key')) !!}
        @endforeach
    </div>

</div>