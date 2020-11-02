<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    {{ Form::hidden('model_id', $self->getModel()->id) }}
    {{ Form::hidden('email', $self->getEmail()) }}

    <div class="form-inner">

        <div class="form-group item-password">
            {{ Form::label($self->getFormId() . '-password', __('site.email-confirm-form.password-label')) }}
            {{ Form::password('password', [
                'id' => $self->getFormId() . '-password',
                'placeholder' => __('site.email-confirm-form.password')
            ]) }}
        </div>

        <div class="form-group item-actions">
            {{ Form::button(__('site.email-confirm-form.button'), [
                'type' => 'submit'
            ]) }}
        </div>
    </div>
</form>