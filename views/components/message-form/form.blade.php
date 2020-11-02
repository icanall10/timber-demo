<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    {{ Form::hidden('model_id', optional($self->getModel())->id) }}
    {{ Form::hidden('branch_id', optional($self->getBranch())->id) }}
    {{ Form::hidden('return_url', $self->getReturnUrl()) }}

    <div class="form-inner">

        <div class="form-group item-text">
            {{ Form::label($self->getFormId() . '-text', __('site.message-form.text')) }}
            {{ Form::textarea('text', optional($self->getModel())->text, [
                'id' => $self->getFormId() . '-text'
            ]) }}
        </div>

        <div class="form-group item-actions">
            {{ Form::button(__('site.message-form.button'), [
                'type' => 'submit'
            ]) }}
        </div>

    </div>
</form>