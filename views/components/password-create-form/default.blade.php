<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    {{ Form::hidden('id', $self->getId()) }}
    {{ Form::hidden('code', $self->getCode()) }}

    <div class="form-inner">

        <div class="form-group item-password">
            {{ Form::password('password', [
                'placeholder' => __('site.password-create-form.new-password')
            ]) }}
        </div>

        <div class="form-group item-password">
            {{ Form::password('password_confirmation', [
                'placeholder' => __('site.password-create-form.repeat-new-password')
            ]) }}
        </div>

        <div class="form-group item-actions">
            {{ Form::button(__('site.password-create-form.save-password'), [
                'type' => 'submit'
            ]) }}
        </div>


    </div>
</form>