<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    {{ Form::hidden('model_id', $self->getModel()->id) }}

    <div class="form-inner">

        <div class="form-group item-name">
            {{ Form::label($self->getFormId() . '-name', __('site.user-form.name')) }}
            {{ Form::text('name', $self->getModel()->name, [
                'id' => $self->getFormId() . '-name'
            ]) }}
        </div>

        <div class="form-group item-email">
            {{ Form::label($self->getFormId() . '-email', 'Электронная почта') }}
            {{ Form::text('email', $self->getModel()->email, [
                'id' => $self->getFormId() . '-email'
            ]) }}
        </div>

        <div class="form-group" data-user-form-avatar>
            {!! $self->render('avatar') !!}
        </div>

        <div class="form-group item-actions">
            {{ Form::button(__('site.user-form.button'), [
                'type' => 'submit'
            ]) }}
        </div>
    </div>
</form>