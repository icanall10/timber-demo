<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    <div class="form-inner">
        <div class="form-group item-name">
            {{ Form::text('name', null, [
                'placeholder' => __('site.contact-form.name')
            ]) }}
        </div>
        <div class="form-group item-email">
            {{ Form::text('email', null, [
                'placeholder' => 'E-mail'
            ]) }}
        </div>
        <div class="form-group item-text">
            {{ Form::textarea('text', null, [
              'placeholder' => __('site.contact-form.text'),
              'rows' => 9
            ]) }}
        </div>

        <div class="form-group item-actions">
            {{ Form::button(__('site.contact-form.button'), [
                'type' => 'submit'
            ]) }}
        </div>
    </div>
</form>