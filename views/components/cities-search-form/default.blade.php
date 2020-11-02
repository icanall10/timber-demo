<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      data-ajax="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    <div class="form-inner">
        <div class="form-group item-search">
            {{ Form::text('search', null, [
                'placeholder' => 'Введите ваш город',
                'data-ajax',
                'data-track-input' => 400,
                'autocomplete' => 'off'
            ]) }}
        </div>

        <div class="form-group item-actions">
            <button type="submit" data-ajax>
                {!! icon('search') !!}
            </button>
        </div>
    </div>
</form>