<form action="#"
      class="{{ $self->getFormId() }}"
      method="post"
      data-request="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    <div class="form-inner flex flex-nowrap">
        <div class="form-group item-search">
            {{ Form::text('search', $self->getSearch(), [
                'placeholder' => __('site.search-form.i-search'),
                'autocomplete' => 'off'
            ]) }}
        </div>

        <div class="form-group item-actions">
            <button type="submit">
                {!! icon('search') !!}
            </button>
        </div>
    </div>
</form>