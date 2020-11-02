<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    {{ Form::hidden('model_id', $self->getModel()->id) }}

    <div class="form-inner">

        <div class="form-group item-password">
            {{ Form::label($self->getFormId() . '-password', __('site.password-change-form.current-password')) }}
            {{ Form::password('password', [
                'id' => $self->getFormId() . '-password'
            ]) }}
        </div>

        <div class="form-group item-password-new">
            {{ Form::label($self->getFormId() . '-password-new', __('site.password-change-form.new-password')) }}
            {{ Form::password('password_new', [
                'id' => $self->getFormId() . '-password-new'
            ]) }}
        </div>

        <div class="form-group item-password-new-confirmation">
            {{ Form::label($self->getFormId() . '-password-new-confirmation', __('site.password-change-form.new-password-confirm')) }}
            {{ Form::password('password_new_confirmation', [
                'id' => $self->getFormId() . '-password-new-confirmation'
            ]) }}
        </div>

        <div class="form-group item-actions">
            {{ Form::button(__('site.password-change-form.button'), [
                'type' => 'submit'
            ]) }}
        </div>
    </div>
</form>