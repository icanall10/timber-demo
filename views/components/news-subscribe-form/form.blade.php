<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    <div class="form-inner flex flex-nowrap">

        <div class="form-group item-email">
            {{ Form::text('email', null, [
                'placeholder' => 'E-mail'
            ]) }}
        </div>

        <div class="form-group item-actions">
            <button type="submit">
                {!! icon('letter') !!}
                {{ __('site.news-subscribe-block.button') }}
            </button>
        </div>
    </div>
</form>