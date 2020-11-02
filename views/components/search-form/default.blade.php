<form action="#"
      class="{{ $self->getFormId() }}"
      method="post"
      data-ajax="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    <div class="form-inner flex flex-nowrap">
        <div class="form-group item-search">
            {{ Form::text('search', null, [
                'placeholder' => 'Я ищу...',
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