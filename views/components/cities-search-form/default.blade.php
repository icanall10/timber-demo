<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      data-request="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    <div class="form-inner">
        <div class="form-group item-search">
            {{ Form::text('search', null, [
                'placeholder' => __('site.cities-search-form.input-your-city'),
                'data-request',
                'data-track-input' => 400,
                'autocomplete' => 'off'
            ]) }}
        </div>

        <div class="form-group item-actions">
            <button type="submit" data-request>
                {!! icon('search') !!}
            </button>
        </div>
    </div>
</form>